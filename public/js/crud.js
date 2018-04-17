$(document).ready(function(){
        
    //$('#emp_cnpj').mask('00.000.000/0000-00', {reverse: true});

    var cnpj_value = $("input[name='empresa']:checked").val();
    setCnpj(cnpj_value);

    function setCnpj(value)
    {
        if (value == '1') {
            $('#emp_cnpj').mask('00.000.000/0000-00', {reverse: true});
        }
        elseif(value == '2')
        {
            $('#emp_cnpj').mask('00000000000000', {reverse: true});
        }
    }

    /*$('input[type=radio][name=empresa]').change(function() {
        if (this.value == '1') {
            $('#emp_cnpj').mask('00.000.000/0000-00', {reverse: true});
        }
        else if (this.value == '2') {
            $('#emp_cnpj').mask('00000000000000', {reverse: true});
        } 
    });*/
    
    /*$('#empresa').change(function(){
        selected_value = $("input[name='empresa']:checked").val();
        alert(selected_value);
    });*/


});
  


