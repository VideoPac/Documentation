
<p>
Follow these steps to manually create a consolidator:</p>

<p>1) Create two consolidator objects</p>

<p>2) Pass the two consolidator objects to the SequentialConsolidator constructor.</p>

<p>3) Define the event handler for the sequential consolidator</p>

<p>4) Add the event handler to the sequential consolidator</p>

<div class="section-example-container">
<pre class="python">def Initialize(self):
    # first define a one day trade bar -- this produces a consolidated piece of data after a day has passed
    one_day_consolidator = TradeBarConsolidator(timedelta(1))

    # next define our 3 count trade bar -- this produces a consolidated piece of data after it sees 3 pieces of data
    three_count_consolidator = TradeBarConsolidator(3)

    # here we combine them to make a new, 3 day trade bar to create the sequential consolidator
    self.consolidator = SequentialConsolidator(one_day_consolidator, three_count_consolidator)

    self.consolidator.DataConsolidated += self.consolidation_handler
    
def consolidation_handler(self, sender, consolidated_bar):
    self.Debug(str(consolidated_bar.EndTime - consolidated_bar.Time) + " " + consolidated_bar.ToString())</pre>
<pre class="csharp">public override void Initialize()
{ 
    // first define a one day trade bar -- this produces a consolidated piece of data after a day has passed
    var oneDayConsolidator = new TradeBarConsolidator(TimeSpan.FromDays(1));

    // next define our 3 count trade bar -- this produces a consolidated piece of data after it sees 3 pieces of data
    var threeCountConsolidator = new TradeBarConsolidator(3);

    // here we combine them to make a new, 3 day trade bar to create the sequential consolidator
    _three_oneDayBar = new SequentialConsolidator(oneDayConsolidator, threeCountConsolidator);

    _three_oneDayBar.DataConsolidated += ConsolidationHandler;
}

private void ConsolidationHandler(object sender, TradeBar consolidatedBar) {
    Debug((consolidatedBar.EndTime - consolidatedBar.Time).ToString() + " " + consolidatedBar.ToString());
}</pre>
</div>