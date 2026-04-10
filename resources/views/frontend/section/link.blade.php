 <meta http-equiv="x-ua-compatible" content="ie=edge" />
 <meta name="description" content="" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <meta property="og:title" content="" />
 <meta property="og:type" content="" />
 <meta property="og:url" content="" />
 <meta property="og:image" content="" />
 <!-- Favicon -->
 <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/imgs/theme/favicon.svg') }}" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
     integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

 <!-- Template CSS -->
 <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}" />

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
