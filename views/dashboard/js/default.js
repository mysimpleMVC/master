$(document).ready(function () {
    $(function () {

        $.get('dashboard/xhrGetListings', function (o) {

            for (var i = 0; i < o.length; i++)
            {

                $('#listInserts').append('<table class="table"><tr><td width="95%">' + o[i].text + '</td>' +
                        '<td ><a class="del" rel="' + o[i].dataid + '" data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#"><span class="icon icon-folder-remove" style="font-size:18px; color:#3498db;"></span></a></td></tr></table>');
            }

            $('.del').live('click', function () {

                delItem = $(this);
                var id = $(this).attr('rel');

                $.post('dashboard/xhrDeleteListing', {'id': id}, function (o) {
                    delItem.parent().remove();
                }, 'json');
                location.reload();
                return false;
            });

        }, 'json');



        $('#randomInsert').submit(function () {
            var url = $(this).attr('action');
            var data = $(this).serialize();

            $.post(url, data, function (o) {

                $('#listInserts').append('<table class="table"><tr><td width="95%">' + o.text + '</td>' +
                        '<td ><a class="del" rel="' + o.dataid + '" data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#"><span class="icon icon-folder-remove" style="font-size:18px; color:#3498db;"></span> </a></td></tr></table>');
            }, 'json');

            location.reload(); 
            
            $('#exampleInputName2').val('');
            return false;
        });
    });


    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

});