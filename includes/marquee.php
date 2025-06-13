 <section>
     <div class="marquee">
         <div class="marquee-content">
             <img src="img/logos/fortinet.png" alt="Fortinet" class="tech-logo">
             <img src="img/logos/xdr-cortex.png" alt="XDR Cortex" class="tech-logo">
             <img src="img/logos/forticlient-ems.png" alt="FortiClient EMS" class="tech-logo">
             <img src="img/logos/red-team.png" alt="Red Team" class="tech-logo">
             <img src="img/logos/blue-team.png" alt="Blue Team" class="tech-logo">
             <img src="img/logos/iso-27001.png" alt="ISO 27001" class="tech-logo">
             <img src="img/logos/cloudflare.png" alt="Cloudflare" class="tech-logo">
             <img src="img/logos/azure.png" alt="Azure" class="tech-logo">
             <!-- Duplicar los logos para crear un efecto de bucle continuo -->
             <img src="img/logos/fortinet.png" alt="Fortinet" class="tech-logo">
             <img src="img/logos/xdr-cortex.png" alt="XDR Cortex" class="tech-logo">
             <img src="img/logos/forticlient-ems.png" alt="FortiClient EMS" class="tech-logo">
             <img src="img/logos/red-team.png" alt="Red Team" class="tech-logo">
             <img src="img/logos/blue-team.png" alt="Blue Team" class="tech-logo">
             <img src="img/logos/iso-27001.png" alt="ISO 27001" class="tech-logo">
             <img src="img/logos/cloudflare.png" alt="Cloudflare" class="tech-logo">
             <img src="img/logos/azure.png" alt="Azure" class="tech-logo">
         </div>
     </div>
 </section>
 <style>
     .marquee {
         overflow: hidden;
         position: relative;
         width: 100%;
         background-color: #1f2937;
         padding: 2rem 0;
     }

     .marquee-content {
         display: flex;
         gap: 2rem;
         animation: marquee 10s linear infinite;
     }

     @keyframes marquee {
         from {
             transform: translateX(0%);
         }

         to {
             transform: translateX(-50%);
         }
     }

     .tech-logo {
         height: 60px;
         filter: grayscale(100%);
         transition: filter 0.3s ease;
     }

     .tech-logo:hover {
         filter: grayscale(0%);
     }
 </style>