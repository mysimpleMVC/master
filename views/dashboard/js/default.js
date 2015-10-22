$(document).ready(function () {
    $(function () {

        $.get('dashboard/xhrGetListings', function (o) {

            for (var i = 0; i < o.length; i++)
            {

                $('#listInserts').append('<table class="table table-bordered table-striped "><tr><td width="95%">' + o[i].text + '</td>' +
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

                $('#listInserts').append('<table class="table table-bordered table-striped "><tr><td width="95%">' + o.text + '</td>' +
                        '<td ><a class="del" rel="' + o.dataid + '" data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="#"><span class="icon icon-folder-remove" style="font-size:18px; color:#3498db;"></span> </a></td></tr></table>');
            }, 'json');

            location.reload();
            return false;
        });
    });


    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $('#date').change(function () {
        function _calculateAge(birthday) { // birthday is a date
            var ageDifMs = Date.now() - birthday.getTime();
            var ageDate = new Date(ageDifMs); // miliseconds from epoch
            return Math.abs(ageDate.getUTCFullYear() - 1970);
        }
        $(function getAge() {
            var age = _calculateAge(new Date($("#date").val()));
            console.log(age);
            $("#age").html(age);
            
        })
    });


});