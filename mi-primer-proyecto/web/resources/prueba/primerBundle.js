const btnAbonar= document.getElementById("btnAbonar");
const btnRetirar= document.getElementById("btnRetirar");
const btnAcceder= document.getElementById("btnAcceder");
const hCliente= document.getElementById("hcliente");
const hSaldo= document.getElementById("hsaldo");
const divCta= document.getElementById("noCuenta");
const divMensaje= document.getElementById("mensaje");

var noCuenta;
var idCte;
var idSuc;
var sucursal;
var saldo;

const tablaMov =  $('#tablaMov').DataTable({

    columns: [
        { title: 'Folio' },
        { title: 'Tipo' },
        { title: 'Importe' },
        { title: 'Fecha' },
        { title: 'Sucursal' },
    ],
});
/*document.addEventListener("DOMContentLoaded",function(evento:Event){

});*/

var cuenta = document.getElementById("cuenta");

function insertarMov(importe,tipomov,cuenta,idcte,idsuc){

    let datos = {
        importe,
        tipomov,
        cuenta,
        idcte,
        idsuc
    }
    fetch(url_setMovimientos,{
        method: "POST",
        body: JSON.stringify(datos),
        headers: {
            "Content-Type": "application/json",
        }
    })
        .then(response => response.json())
        .then(data =>{
                document.getElementById("cantidad").value="";
                document.getElementById("canti").value="";

                var tipomov=data['data'][0]['tipomov'];
                var importe=data['data'][0]['importe'];
                var fecha=data['data'][0]['fecha'];
                var folio=data['data'][0]['idmov'];

                if(tipomov == "ingreso"){
                    saldo=parseFloat(saldo)+parseFloat(importe);
                    Materialize.toast('Abono realizado con exito', 3000);

                    hSaldo.innerHTML = 'SALDO: $ '+ saldo;
                }else{
                    saldo=parseFloat(saldo)-parseFloat(importe);
                    hSaldo.innerHTML = 'SALDO: $ '+ saldo;
                    Materialize.toast('Retiro realizado con exito', 3000);
                }

                tablaMov.row.add([
                    folio,
                    tipomov,
                    importe,
                    fecha,
                    sucursal
                ]).draw();
            }
        )
        .catch(err => {
            console.log(err);
            Materialize.toast({html: 'No se realizo la operacion'});
        });
}

function getMovimientos(cuenta){

    let datos = {
        cuenta
    }

    fetch(url_getMovimientos,{
        method: "POST",
        body: JSON.stringify(datos),
        headers: {
            "Content-Type": "application/json",
        }
    })
        .then(response => response.json())
        .then(data =>{
                document.getElementById("acciones").hidden = false;
                document.getElementById("cuenta").value="";
                var tipomov;
                var importe;
                var fecha;
                var folio;
                sucursal;
                var cliente = data['data'][0]['cliente'];
                saldo = data['data'][0]['SaldoTotal'];
                noCuenta = data['data'][0]['nocuenta'];
                idCte = data['data'][0]['idcte'];
                idSuc = data['data'][0]['idsuc'];

                hCliente.innerHTML = cliente;
                hSaldo.innerHTML = 'SALDO: $ '+saldo;
                divCta.innerHTML = 'No. Cuenta: '+ noCuenta;

                tablaMov.clear();

                for (i=0;i<data['data'].length;i++){
                    tipomov=data['data'][i]['tipomov'];
                    importe=data['data'][i]['importe'];
                    fecha=data['data'][i]['fecha'];
                    folio=data['data'][i]['idmov'];
                    sucursal=data['data'][i]['nombre'];
                    tablaMov.row.add([
                        folio,
                        tipomov,
                        importe,
                        fecha,
                        sucursal
                    ]).draw();
                }
            }
        )
        .catch(err => {
            console.log(err);

        });
}

//Evento click del btnAbonar
btnAbonar.addEventListener("click",function ()
    {
        var importe = document.getElementById("cantidad").value;
        var tipomov = "ingreso";

        insertarMov(importe,tipomov,noCuenta,idCte,idSuc);
    }
)

//Evento click del btnRetirar
btnRetirar.addEventListener("click",function ()
    {
        var importe = document.getElementById("canti").value;
        var tipomov = "retiro";

        insertarMov(importe,tipomov,noCuenta,idCte,idSuc);
    }
)

btnAcceder.addEventListener("click",function ()
    {
        if (cuenta.value == '' || cuenta.value == null || cuenta.value.length<16 || cuenta.value <0 || cuenta.value.length>16){
            id= "mensaje";
            msg="Ingresa un número de cuenta válido";
            alerta(id,msg);
        } else{
            getMovimientos(cuenta.value);
        }
    }
)

function alerta(id,msg) {
    $(`#${id}`).html(msg);
    $(`#${id}`).fadeIn(300, function() {
        setTimeout(function() {
            $(`#${id}`).fadeOut(300);
        }, 2000);
    });
}