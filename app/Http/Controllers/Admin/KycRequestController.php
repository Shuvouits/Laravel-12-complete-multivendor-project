<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KYC;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KycRequestController extends Controller
{
    //

    public function index()
    {
        $kycRequests = KYC::with('user')->paginate(25);

        return view('admin.kyc.index', compact('kycRequests'));
    }

    public function pending(): View
    {
        $kycRequests = Kyc::whereStatus('pending')->paginate(25);

        return view('admin.kyc.pending', compact('kycRequests'));
    }

    public function rejected(): View
    {
        $kycRequests = Kyc::whereStatus('rejected')->paginate(25);

        return view('admin.kyc.rejected', compact('kycRequests'));
    }

    public function show(Kyc $kyc_request): View
    {
        return view('admin.kyc.show', compact('kyc_request'));
    }

    public function download(Kyc $kyc_request): StreamedResponse
    {
        return Storage::disk('local')->download($kyc_request->document_scan_copy);
    }

    public function update(Kyc $kyc_request, Request $request): RedirectResponse
    {
        $kyc_request->update([
            'status' => $request->status,
        ]);

        if ($kyc_request->status == 'approved') {
            MailService::send(
                to: $kyc_request->user->email,
                subject: 'KYC Application Has Been Approved',
                body: 'Congratulations! Your KYC Application Has Been Approved.'
            );
        } elseif ($kyc_request->status == 'rejected') {
            MailService::send(
                to: $kyc_request->user->email,
                subject: 'KYC Application Has Been Rejected',
                body: 'Sorry! Your KYC Application Has Been Rejected.'
            );
        }



        return redirect()->route('admin.kyc.index');
    }
}
