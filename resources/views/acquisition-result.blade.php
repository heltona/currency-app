<html>
<head>
</head>
<body>
	<p>Moeda de Origin: {{ $origin->getCurrency() }}</p>
	<p>Moeda de Destino: {{ $target->getCurrency() }}</p>
	<p>Valor para Conversão: BRL {{ $origin->getAmount() }}</p>
	<p>Forma de pagamento: {{ $payment->getPaymentMeans() }}</p>
	<p>Valor de {{$target->getCurrency() }}: {{ $currencyValue }}</p>
	<p>Valor comprado: {{ $target->getCurrency()}} {{ $target->getAmount() }}</p>
	<p>Taxa de pagamento: {{ $paymentFees->getCurrency()}} {{ $paymentFees->getAmount() }}</p>
	<p>Taxa de Conversão: {{ $conversionFees->getCurrency()}} {{ $conversionFees->getAmount() }}</p>
	<p>Valor utilizado (total - taxas): {{ $amountMinusFees->getCurrency()}} {{ $amountMinusFees->getAmount() }}</p>
	

</body>
</html>