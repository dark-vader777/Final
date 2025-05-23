/* ------------------------------------------------------------------------------
 *
 *  # ECommerce - Orders historyheadimg
 *
 *  Demo JS code for ecommerce_orders_history.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var EcommerceOrdersHistory = function() {


    //
    // Setup module components
    //

    // Datatable
    var _componentDatatable = function() {
        if (!$().DataTable) {
            console.warn('Warning - datatables.min.js is not loaded.');
            return;
        }

        // Apply custom style to select
        $.extend( $.fn.dataTableExt.oStdClasses, {
            "sLengthSelect": "custom-select"
        });

        // Initialize
        var table = $('.table-orders-historyheadimg').DataTable({
            autoWidth: false,
            columnDefs: [
                {
                    visible: false,
                    targets: 0
                },
                {
                    targets: 1,
                    width: 400
                },
                {
                    orderable: false,
                    width: 16,
                    targets: 7
                }
            ],
            order: [[ 0, 'asc' ]],
            dom: '<"datatable-header"fBl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            },
            lengthMenu: [ 25, 50, 75, 100 ],
            displayLength: 25,
            buttons: [
                {
                    extend: 'pdfHtml5',
                    text: 'Export to PDF <i class="icon-file-pdf ml-2"></i>',
                    className: 'btn btn-teal',
                    orientation: 'landscape',
                    exportOptions: {
                        columns: [ 1, 2, 3, 4, 5, 6 ],
                        stripHtml: true
                    },
                    customize: function (doc) {
                        doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                    }
                }
            ],
            drawCallback: function (settings) {
                var api = this.api();
                var rows = api.rows({ page: 'current' }).nodes();
                var last = null;

                api.column(0, { page: 'current' }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before(
                            '<tr class="table-active group"><td colspan="8" class="font-weight-semibold">' + group + '</td></tr>'
                        );

                        last = group;
                    }
                });
            }
        });

        // Order by the grouping
        $('.table-orders-historyheadimg tbody').on( 'click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 0 && currentOrder[1] === 'asc') {
                table.order([0, 'desc']).draw();
            }
            else {
                table.order([0, 'asc']).draw();
            }
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentDatatable();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    EcommerceOrdersHistory.init();
});
