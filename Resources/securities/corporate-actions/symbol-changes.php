
<?php

$getSymbolChangesText = function($mapFilesLink) 
{
    echo "
<p>The benefit of the <code>Symbol</code> class is that it always maps to the same security, regardless of their trading ticker. When a company changes its trading ticker, LEAN sends a <code>SymbolChangedEvent</code> to the <code>OnData</code> method. <code>SymbolChangedEvent</code> objects have the following properties:</p>

<div data-tree='QuantConnect.Data.Market.SymbolChangedEvent'></div>

<p>To get the <code>SymbolChangedEvent</code> objects in the <code>Slice</code>, index the <code>SymbolChangedEvents</code> property of the <code>Slice</code> with the security <code>Symbol</code>. The <code>Slice</code> may not contain data for your <code>Symbol</code>. To avoid issues, check if the <code>SymbolChangedEvents</code> property contains data for your security before you index it with the security <code>Symbol</code>.</p>

<div class='section-example-container'>
        <pre class='csharp'>if (data.SymbolChangedEvents.ContainsKey(_symbol))
{
    var symbolChangedEvent = data.SymbolChangedEvents[_symbol];
}</pre>
        <pre class='python'>if self.symbol in data.SymbolChangedEvents:
    symbolChangedEvent = data.SymbolChangedEvents[self.symbol]</pre>
</div>

<p>You can also iterate through the <code>SymbolChangedEvents</code> dictionary. The keys of the dictionary are the <code>Symbol</code> objects and the values are the <code>SymbolChangedEvent</code> objects.</p>
<div class='section-example-container'>
        <pre class='csharp'>// Example</pre>
        <pre class='python'># Example</pre>
</div>

<p>If you have an open order for a security when they change their ticker, LEAN cancels your order. To keep your order, in the <code>OnOrderEvent</code> method, get the quantity and <code>Symbol</code> of the cancelled order and submit a new order.</p> 

<div class='section-example-container'>
        <pre class='csharp'>// Example ^^</pre>
        <pre class='python'>## Example ^^</pre>
    </div>

<p>LEAN stores the data for ticker changes in map files. To view some example map files, see the <a rel='nofollow' target='_blank' href='{$mapFilesLink}'>LEAN GitHub repository</a>.</p>

";
}

?>


