<html>
<head>
    
</head>
    <body>
    
    <form method="post" action="/buy-currency">
    @csrf
        <select name='target-currency'>
            <option>USD</option>
            <option>EUR</option>
        
        </select>    
        <select name='payment-means'>
            <option>Boleto</option>
            <option>Cartão de Crédito</option>
        </select>
        <input type="number" name="amount" />
        <button type="submit">Enviar</button>
    </form>
    </body>

</html>