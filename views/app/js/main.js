$(function() {
    //Date picker
    $('#datepicker').datepicker({});
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });
});


$(document).ready(function() {
  var table = $('#tabla').DataTable({
    lengthChange: true,
    "language": {
      "sLengthMenu": "_MENU_ entradas por paginas",
      "sZeroRecords": "Nada encontrado, lo sentimos",
      "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
      "sInfoEmpty": "Mostrando 0 ta 0 de 0 entradas",
      "sInfoFiltered": "(filtrado de _MAX_ entradas en total)",
      "sLoadingRecords": "Cargando",
      "sProcessing": "Procesando",
      "sSearch": "Buscar: ",
      "sSearchPlaceholder": "",
      "sFirst": "Primero",
      "sLast": "Último",
      "sNext": "Siguiente",
    },
    responsive: {
      details: {
        renderer: function ( api, rowIdx, columns ) {
            var data = $.map( columns, function ( col, i ) {
                return col.hidden ?
                    '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
                        '<td> '+col.title+'  :  '+'   </td> '+
                        '<td> <strong>  '+col.data+' </strong> </td>'+
                    '</tr> ' :
                    '';
            } ).join(' ');
            return data ?
                $('<table/>').append( data ) :
                false;
        }
      }
    }
  });

});
