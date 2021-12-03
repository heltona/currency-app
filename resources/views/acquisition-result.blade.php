<html>
<head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
	<header>
		<h1>Resultado da Cotação</h1>
	</header>
	<main>
		<p><b>Moeda de Origin:</b> {{ $origin->getCurrency() }}</p>
		<p><b>Moeda de Destino:</b> {{ $target->getCurrency() }}</p>
		<p><b>Valor para Conversão:</b> BRL {{ $origin->getAmount() }}</p>
		<p><b>Forma de pagamento:</b> {{ $payment->getPaymentMeans() }}</p>
		<p><b>Valor de {{$target->getCurrency() }}:</b> {{ $currencyValue }}</p>
		<p><b>Valor comprado:</b> {{ $target->getCurrency()}} {{ $target->getAmount()
			}}</p>
		<p><b>Taxa de pagamento:</b> {{ $paymentFees->getCurrency()}} {{
			$paymentFees->getAmount() }}</p>
		<p><b>Taxa de Conversão:</b> {{ $conversionFees->getCurrency()}} {{
			$conversionFees->getAmount() }}</p>
		<p><b>Valor utilizado (total - taxas):</b> {{
			$amountMinusFees->getCurrency()}} {{ $amountMinusFees->getAmount() }}</p>
	</main>
	<footer> 
		<a href="/">Currency App &reg;</a>
	</footer>
</body>
</html>