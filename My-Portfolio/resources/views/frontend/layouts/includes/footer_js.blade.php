<!-- JavaScript {{ asset('frontend/assets') }}/Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/assets') }}/lib/typed/typed.min.js"></script>
<script src="{{ asset('frontend/assets') }}/lib/easing/easing.min.js"></script>
<script src="{{ asset('frontend/assets') }}/lib/waypoints/waypoints.min.js"></script>
<script src="{{ asset('frontend/assets') }}/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{ asset('frontend/assets') }}/lib/isotope/isotope.pkgd.min.js"></script>
<script src="{{ asset('frontend/assets') }}/lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="{{ asset('frontend/assets') }}/mail/jqBootstrapValidation.min.js"></script>
<script src="{{ asset('frontend/assets') }}/mail/contact.js"></script>

<!-- jQuery -->
<script src="{{ asset('frontend/assets') }}/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/jquery-migrate-3.4.0.min.js"></script>

<!-- plugins -->
<script src="{{ asset('frontend/assets') }}/js/plugins.js"></script>

<script src="{{ asset('frontend/assets') }}/js/gsap.min.js"></script>
<script src="{{ asset('frontend/assets') }}/js/ScrollSmoother.min.js"></script>
<script src="{{ asset('frontend/assets') }}/js/ScrollTrigger.min.js"></script>
<script src="{{ asset('frontend/assets') }}/js/smoother-script.js"></script>

<!-- custom scripts -->
<script src="{{ asset('frontend/assets') }}/js/scripts.js"></script>

<!-- Template Javascript -->
<script src="{{ asset('frontend/assets') }}/js/main.js"></script>
<!-------toastr sweet alert------->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- ======== toastr added  ========= --}}
<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>

{{-- ======== sweetalert added  ========= --}}
<script type="text/javascript">
    function deleteData(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }
</script>
