 function Apare_Opc() {
     var opc = document.querySelector('.p_opc');
     var button_opc = document.querySelector(".btn-opc"); // toma el primer elemento
     if (opc.style.display === 'none' || opc.style.display === '') {
         opc.style.display = 'flex';
         button_opc.style.rotate = '90deg'; // Cambia el color de fondo del botón
         opc.style.animation = 'aparecer 0.3s ease-in-out'; // Aplica la animación CSS

     } else {

         button_opc.style.rotate = '0deg';
         opc.style.animation = 'desaparecer 0.3s ease-in-out'; // Aplica la animación CSS
         setTimeout(() => {
             opc.style.display = 'none';
         }, 200);

         // Espera a que la animación termine antes de ocultar el menú
     }
 }