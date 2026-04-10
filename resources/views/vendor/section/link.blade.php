<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('admin/dist/libs/jsvectormap/dist/jsvectormap.css') }}" rel="stylesheet" />
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="{{ asset('admin/dist/css/tabler.css') }}" rel="stylesheet" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PLUGINS STYLES -->
<link href="{{ asset('admin/dist/css/tabler-flags.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/dist/css/tabler-socials.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/dist/css/tabler-payments.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/dist/css/tabler-vendors.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/dist/css/tabler-marketing.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/dist/css/tabler-themes.css') }}" rel="stylesheet" />
<!-- END PLUGINS STYLES -->

<!-- BEGIN DEMO STYLES -->
<link href="{{ asset('admin/preview/css/demo.css') }}" rel="stylesheet" />
<!-- END DEMO STYLES -->

<!-- BEGIN CUSTOM FONT -->
<style>
  @import url("https://rsms.me/inter/inter.css");
</style>
<!-- END CUSTOM FONT -->

 <!-- SweetAlert2 CSS -->
 <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

 <style>
     .swal2-popup.swal2-toast.custom-toast {
         width: 360px !important;
         padding: 14px 16px !important;
         border-radius: 16px !important;
         background: #111827 !important;
         color: #fff !important;
         box-shadow: 0 18px 45px rgba(0, 0, 0, 0.22) !important;
         border: 1px solid rgba(255, 255, 255, 0.08) !important;
         backdrop-filter: blur(10px);
     }

     .swal2-toast .swal2-title {
         font-size: 14px !important;
         font-weight: 600 !important;
         line-height: 1.45 !important;
         margin: 0 !important;
         color: #fff !important;
     }

     .swal2-toast .swal2-html-container {
         font-size: 13px !important;
         line-height: 1.5 !important;
         margin: 4px 0 0 0 !important;
         color: rgba(255, 255, 255, 0.82) !important;
     }

     .swal2-toast .swal2-icon {
         margin: 0 10px 0 0 !important;
         position: relative !important;
         transform: scale(0.55) !important;
         transform-origin: center center !important;
         flex-shrink: 0 !important;
     }

     .swal2-toast .swal2-timer-progress-bar {
         background: rgba(255, 255, 255, 0.2) !important;
         height: 3px !important;
     }

     .swal2-toast.swal2-show {
         animation: toastIn 0.35s ease;
     }

     .swal2-toast.swal2-hide {
         animation: toastOut 0.2s ease forwards;
     }



     @keyframes toastIn {
         from {
             opacity: 0;
             transform: translate3d(20px, 0, 0) scale(0.96);
         }

         to {
             opacity: 1;
             transform: translate3d(0, 0, 0) scale(1);
         }
     }

     @keyframes toastOut {
         from {
             opacity: 1;
             transform: translate3d(0, 0, 0) scale(1);
         }

         to {
             opacity: 0;
             transform: translate3d(20px, 0, 0) scale(0.98);
         }
     }
 </style>
