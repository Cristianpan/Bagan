<?php require("../includes/cabecera.php"); ?>

<body class="bg-gris-claro">
	<nav class="px-10 bg-rojo w-full h-[72px] flex items-center sticky top-0 z-50 justify-between">
		<a href="#" class="uppercase text-blanco font-extrabold text-lg">Cancelar</a>
		<button type="submit" class="flex gap-x-2 uppercase text-blanco font-extrabold text-lg">
			Listo
			<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M15 0C6.72909 0 0 6.72909 0 15C0 23.2709 6.72909 30 15 30C23.2709 30 30 23.2709 30 15C30 6.72909 23.2709 0 15 0ZM22.8065 9.97284L13.1142 21.5113C13.0079 21.6379 12.8756 21.7402 12.7263 21.8113C12.577 21.8823 12.4141 21.9205 12.2488 21.9231H12.2293C12.0676 21.923 11.9077 21.889 11.76 21.8231C11.6123 21.7573 11.48 21.6611 11.3719 21.5409L7.21803 16.9255C7.11254 16.8136 7.03047 16.6817 6.97666 16.5377C6.92285 16.3936 6.89838 16.2403 6.90469 16.0866C6.911 15.933 6.94795 15.7821 7.01339 15.643C7.07882 15.5038 7.17142 15.3791 7.28572 15.2763C7.40003 15.1734 7.53375 15.0944 7.67902 15.044C7.82429 14.9935 7.97817 14.9726 8.13163 14.9825C8.2851 14.9923 8.43504 15.0328 8.57264 15.1014C8.71025 15.1701 8.83275 15.2655 8.93293 15.3822L12.199 19.0111L21.0397 8.4887C21.238 8.25943 21.5185 8.11741 21.8207 8.09333C22.1229 8.06925 22.4224 8.16505 22.6545 8.36002C22.8866 8.555 23.0327 8.83348 23.0611 9.13527C23.0896 9.43707 22.9981 9.73793 22.8065 9.97284Z" fill="white"/>
			</svg>
		</button>
	</nav>
	
	<header class="py-8">
		<h1 class="text-center uppercase text-[27px] font-extrabold">Resumen de factura</h1>
	</header>

	<main>
		<div class="drop-shadow-xl mx-auto rounded-md bg-blanco w-11/12 md:w-[760px] h-auto border-slate-700 py-5 px-8 mb-8">
			<ul>
				<li class="flex items-center ">
					<p class="uppercase font-extrabold mb-[13px] mr-2 text-lg">Total de articulos:</p> 
					<p class="text-lg">9</p>
				</li>

				<li class="flex items-center ">
					<p class="uppercase font-extrabold my-[13px] mr-2 text-lg">Total de entradas:</p>
					<p class="text-lg">$1,000</p>
				</li>

				<li class="flex items-center ">
					<p class="uppercase font-extrabold mr-2 my-[13px] text-lg">Tienda de procedencia:</p>
					<p class="text-lg">Office Depot</p>
				</li>

				<li class="flex items-center">
					<p class="uppercase font-extrabold mr-2 my-[13px] text-lg">Número de factura:</p>
					<p class="text-lg">10008000</p>
				</li>
			</ul>

			<div class="md:flex mx-auto md:justify-end  mt-5 md:mt-[10px]"">
				<button type="submit" class="bg-azul w-11/12 md:w-[80px] h-[50px] rounded-[3px]">
					<svg xmlns="http://www.w3.org/2000/svg" class="mx-auto" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
						<path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
						<path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
						<rect x="7" y="13" width="10" height="8" rx="2" />
					</svg>
				</button>
			</div>
		</div>

		<div class="drop-shadow-xl  mx-auto rounded-md bg-blanco w-11/12 md:w-[760px] h-auto border-slate-700 py-5 px-8 mb-8">
			<ul>
				<li class="flex items-center ">
					<p class="uppercase font-extrabold mr-[7px] my-[13px] text-lg">Nombre del articulo:</p> 
					<p class="text-lg">Bicolor dixon</p>
				</li>

				<li class="flex items-center ">
					<p class="uppercase font-extrabold mr-[7px] my-[13px] text-lg">Numero de partida:</p>
					<p class="text-lg">21101</p>
				</li>

				<li class="flex items-center ">
					<p class="uppercase font-extrabold mr-[7px] my-[13px] text-lg">Clave del articulo:</p>
					<p class="text-lg">0280</p>
				</li>

				<li class="flex items-center ">
					<p class="uppercase font-extrabold mr-[7px] my-[13px] text-lg">Tipo de unidad:</p>
					<p class="text-lg">caja</p>
				</li>

				<li class="flex items-center ">
					<p class="uppercase font-extrabold mr-[7px] my-[13px] text-lg">Cantidad de artículos:</p>
					<p class="text-lg">3</p>
				</li>

				<li class="flex items-center ">
					<p class="uppercase font-extrabold mr-[7px] my-[13px] text-lg">Precio unitario:</p>
					<p class="text-lg">$5.00</p>
				</li>

				<li class="flex items-center ">
					<p class="uppercase font-extrabold mr-[7px] my-[13px] text-lg">Precio total:</p>
					<p class="text-lg">$15.00</p>
				</li>
			</ul>
		</div>
	</main>
</body>

</html>