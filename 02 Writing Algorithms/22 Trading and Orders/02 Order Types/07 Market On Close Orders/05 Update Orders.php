<p>
You can update the quantity and tag of MOC orders until the order fills or the brokerage prevents modifications. To update an order, pass an <code>UpdateOrderFields</code> object to the <code>Update</code> method on the <code>OrderTicket</code>. The <code>Update</code> method returns an <code>OrderResponse</code> to signal the success or failure of the update request.
</p>

<div class="section-example-container">
<pre class="csharp">// Create a new order and save the order ticket
var ticket = MarketOnCloseOrder("SLV", 25, "original tag");

// Update the order
var response = ticket.Update(new UpdateOrderFields() { 
  Quantity = 50,
  Tag = "new tag"
});

// Check if the update was successful
if (response.IsSuccess) { 
     Debug("Order updated successfully");
}
</pre>
<pre class="python"># Create a new order and save the order ticket
ticket = self.MarketOnOpenOrder("SLV", 25, "original tag")

# Update the order
update_settings = UpdateOrderFields()
update_settings.Quantity = 50
update_settings.Tag = "new tag"
response = ticket.Update(update_settings)

# Check if the update was successful
if response.IsSuccess:
     self.Debug("Order updated successfully")
</pre>
</div>

<?php 

echo file_get_contents(DOCS_RESOURCES."/order-types/order-response.html"); 

include(DOCS_RESOURCES."/order-types/update-individual-fields.php");
$supportedMethods = array("UpdateQuantity", "UpdateTag");
$getUpdateIndividualFieldsText($supportedMethods);

echo file_get_contents(DOCS_RESOURCES."/order-types/update-requests.html");

?>