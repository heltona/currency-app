<html>
<head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<script type="text/javascript" src="{{ asset('js/buy-currency.js') }}"></script>
</head>
<body>
	<header>
		<h1>Cotação de moeda</h1>
	</header>
	<main>
	<form method="post" action="/acquisition-result">
		@csrf

		<div>
			<label for="target-currency">Moeda:</label> 
			<select id=""
				name='target-currency'>
				<option>USD</option>
				<option>EUR</option>

			</select>
		</div>
		<div>
			<label for="payment-means">Meio de pagamento:</label> <select id=""
				name='payment-means'>
				<option>Boleto</option>
				<option>Cartão de Crédito</option>
			</select>
		</div>

		<div>

			<label for="amount">Quantidade:</label> <input id="amount" type="number"
				name="amount" />
		</div>
		<div>
			<button type="submit">Enviar</button>
		</div>
		@if($errors->any())
		<div id="errors">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach			
			
			</ul>
		</div>
		@endif
	</form>
	</main>
	<footer>
		<a href="/">Currency App &reg;</a>
	</footer>
</body>

</html>