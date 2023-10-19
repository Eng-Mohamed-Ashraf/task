

<script src="{{my_asset('admin')}}/plugins/jquery/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{my_asset('admin')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script src="{{my_asset('admin')}}/plugins/moment/moment.min.js"></script>
<script src="{{my_asset('admin')}}/plugins/inputmask/jquery.inputmask.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify@3.1.0/dist/tagify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/resumablejs@1.1.0/resumable.min.js"></script>

<script data-name="basic">
    (function(){
// The DOM element you wish to replace with Tagify
        var input = document.querySelector('.basic_tag');

// initialize Tagify on the above input node reference
        new Tagify(input)
    })()
</script>

<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>

<script src="{{my_asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{my_asset('admin')}}/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{my_asset('admin')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="{{my_asset('admin')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{my_asset('admin')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
{{--<script src="{{my_asset('admin')}}/plugins/jqvmap/jquery.vmap.min.js"></script>--}}
{{--<script src="{{my_asset('admin')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>--}}
<!-- jQuery Knob Chart -->
<script src="{{my_asset('admin')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{my_asset('admin')}}/plugins/moment/moment.min.js"></script>
<script src="{{my_asset('admin')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{my_asset('admin')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{my_asset('admin')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{my_asset('admin')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="{{my_asset('admin')}}/plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="{{my_asset('admin')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{my_asset('admin')}}/dist/js/demo.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>



<script src="{{my_asset('admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{my_asset('admin')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{my_asset('admin')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{my_asset('admin')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{my_asset('admin')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{my_asset('admin')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{my_asset('admin')}}/plugins/jszip/jszip.min.js"></script>

{{--<script src="{{my_asset('admin')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>--}}
<script src="{{my_asset('admin')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{my_asset('admin')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{my_asset('admin')}}/dist/js/pages/dashboard.js"></script>




<script>
    var $rows = $('#navbar-vertical-content li');
    $('#side_search').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

        $rows.hide().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();

            if(!~text.indexOf(val)==false){
                $(this).show()
                $(this).find('li').show()

            }

        });
    });



</script>


<script>



    $(document).ready(function() {
        "use strict"
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        $('.selectpicker').selectpicker()
        $('.select').select2()



    });



    function save_form(element,event) {

        event.preventDefault();
        var post=$(element).parents('form').attr('method');


        var form=$(element).parents('form')[0];



        var data = new FormData(form);

        // var data=data.escape(text);
        // $(this).serialize();
        var url=$(element).parents('form').attr('action');


            $.ajax({
                type: post,
                url: url,
                data: data,
                dataty: "json",
                contentType: false,
                processData: false,
                success: function (data) {
                    toastr["success"]("Success  ", "Ok")
                     if(typeof (data.url)!='undefined'){
                         window.location=data.url

                    }
                      else{
                         location.reload()
                     }









                },
                error: function (error) {
                     console.log(error)
                    if (error.status === 422) {

                        const errors = error.responseJSON.errors
                        const first_item = Object.keys(errors)[0]
                        const first_dom = document.getElementById(first_item)
                        const first_message = errors[first_item][0]

                        toastr["error"](" " + first_message, "Error")


                        first_dom.scrollIntoView({behavior: "smooth"})
                        const error_message = document.querySelectorAll('.text-danger')
                        error_message.forEach((element) => element.textContent = '')
                        first_dom.insertAdjacentHTML('afterend', '<div class="text-danger">' + first_message + '</div>')
                        const dom_error = document.querySelectorAll('.form-control')
                        dom_error.forEach((element) => element.classList.remove('border', 'border-danger'))
                        first_dom.classList.add('border', 'border-danger')


                    } else {
                        toastr["error"](" Error", "Error")
                    }


                }
            });


    }


</script>
<script>




    function delete_confirm(element,event){
        var form =  $(element).closest("form");

        event.preventDefault();

        swal({
            title: `هل أنت متأكد من حذف هذا العنصر؟`,
            text: " سيتم حذف بيانات هذا العنصر بالكامل ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    }

</script>
