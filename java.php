<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../portafolio/estilos/java.css">
  <title>Java 💡</title>
</head>
<body>
  <div class="parrafo">
  <h1>JAVA 💡</h1>
  <p>Java es un lenguaje sencillo y orientado a objetos, que permite el desarrollo de aplicaciones en diversas áreas, como seguridad, animación, acceso a bases de datos, aplicaciones cliente-servidor, interfaces gráficas, páginas Web interactivas y desarrollo de aplicaciones móviles, entre otras.</p>
  <h2>EJERCICIOS DE JAVA</h2>
 var sumar=()=>{
                var n1 = document.getElementById('txtN1').value;
                var n2 = document.getElementById('txtN2').value;
                var suma = parseInt(n1) + parseInt(n2);
                alert('la suma de los digitos '+ n1 + ' y '+ n2 +' es '+suma);
            }
<br>
            var resta=()=>{
                var n1 = document.getElementById('txtN1').value;
                var n2 = document.getElementById('txtN2').value;
                var restar = parseInt(n1) - parseInt(n2);
                alert('la resta de los digitos '+ n1 + ' y '+ n2 +' es '+restar);
            }
<br>
            var mayor=()=>{
                var n1 = document.getElementById('txtN1').value;
                var n2 = document.getElementById('txtN2').value;

                if (n1>=n2) {
                    alert(n1 + 'es mayor que '+n2);        
                } else {
                    alert(n2 + 'es mayor que '+n1);
                }
            }
<br>
            var menor=()=>{
                var n1 = document.getElementById('txtN1').value;
                var n2 = document.getElementById('txtN2').value;

                if (n1<=n2) {
                    alert(n1 + 'es menor que '+n2);        
                } else {
                    alert(n2 + 'es menor que '+n1);
                }
            }
<br>
            var mediana=()=>{
                var strNum=prompt("Ingrese numeros separados con comas");
                var nums=strNum.split(",");

                for(i=0, length=nums.length;i<length;i++){
                    nums[i]=parseInt(nums[i]);
                }
            }  
<br>

            var OptMath=()=>{
                var cond=document.getElementById('select');
                var eval=cond.value;

                if (eval=="suma") {
                    sumar();
                }else{
                    if (eval=="resta") {
                        resta();
                    } else {
                        if (eval=="mayor") {
                            mayor();                
                        } else {
                            if (eval=="menor") {
                                menor()
                            } else {

                            }

                        }

                    }
                }

            }
<br>
       var vec=0;

        var vec1=[];

        var tam=prompt('Cuantos datos quiere almacenar');
        var imp=prompt('Que cantidad de digitos desea almacenar');

        for (let i = 0; i < tam; i++) {
            vec1.push(Math.round(Math.random()*imp));
        }

        console.log(vec1.join());

<br>
        vec1.forEach(function(vec1){
            console.log(vec1,vec++);
        });
        <br>

<a href="index.php">PAGINA INICIO</a>
</body>
</html>