<!-- BEGIN PAGE LIBRARIES -->
<script src="{{ asset('admin/dist/libs/apexcharts/dist/apexcharts.min.js') }}" defer></script>
<script src="{{ asset('admin/dist/libs/jsvectormap/dist/jsvectormap.min.js') }}" defer></script>
<script src="{{ asset('admin/dist/libs/jsvectormap/dist/maps/world.js') }}" defer></script>
<script src="{{ asset('admin/dist/libs/jsvectormap/dist/maps/world-merc.js') }}" defer></script>
<!-- END PAGE LIBRARIES -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('admin/dist/js/tabler.min.js') }}" defer></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN DEMO SCRIPTS -->
<script src="{{ asset('admin/preview/js/demo.min.js') }}" defer></script>
<!-- END DEMO SCRIPTS -->



<script>
    document.addEventListener("DOMContentLoaded", function() {
        var themeConfig = {
            theme: "light",
            "theme-base": "gray",
            "theme-font": "sans-serif",
            "theme-primary": "blue",
            "theme-radius": "1",
        };
        var url = new URL(window.location);
        var form = document.getElementById("offcanvasSettings");
        var resetButton = document.getElementById("reset-changes");
        var checkItems = function() {
            for (var key in themeConfig) {
                var value = window.localStorage["tabler-" + key] || themeConfig[key];
                if (!!value) {
                    var radios = form.querySelectorAll(`[name="${key}"]`);
                    if (!!radios) {
                        radios.forEach((radio) => {
                            radio.checked = radio.value === value;
                        });
                    }
                }
            }
        };
        form.addEventListener("change", function(event) {
            var target = event.target,
                name = target.name,
                value = target.value;
            for (var key in themeConfig) {
                if (name === key) {
                    document.documentElement.setAttribute("data-bs-" + key, value);
                    window.localStorage.setItem("tabler-" + key, value);
                    url.searchParams.set(key, value);
                }
            }
            window.history.pushState({}, "", url);
        });
        resetButton.addEventListener("click", function() {
            for (var key in themeConfig) {
                var value = themeConfig[key];
                document.documentElement.removeAttribute("data-bs-" + key);
                window.localStorage.removeItem("tabler-" + key);
                url.searchParams.delete(key);
            }
            checkItems();
            window.history.pushState({}, "", url);
        });
        checkItems();
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    const appToast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 3200,
        timerProgressBar: true,
        customClass: {
            popup: 'custom-toast'
        },
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
        }
    });
</script>

@if(session('toast'))
    <script>
        const toastData = @json(session('toast'));

        appToast.fire({
            icon: toastData.type || 'success',
            title: toastData.title || 'Done',
            html: toastData.message || '',
            timer: toastData.timer || 3200
        });
    </script>
@endif

@stack('scripts')
