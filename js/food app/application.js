$(function() {

	// Listening to keyup events for customer name
	$("#customer_name").keyup(function(e) {
		$("#customer_name_preview").text($("#customer_name").val());
	});

	// Listening to keyup events for customer address
	$("#customer_address").keyup(function(e) {
		$("#customer_address_preview").text($("#customer_address").val());
	});

	// Listening to keyup events for customer phone
	$("#customer_phone").keyup(function(e) {
		$("#customer_phone_preview").text($("#customer_phone").val());
	});

	// Add item in Preview Order when any item's "Select" button is clicked
	$(".select_item").click(function(e) {
		var parent = $(this).parent().parent();
		var id   = parent.find(".item_id").text();
		var name = parent.find(".item_name").text();
		var price = parseInt(parent.find(".item_price").attr("data-price"));

		if ($("#preview_item_" + id).length >= 1) {
			var preview_item = $("#preview_item_" + id);
			var quantity = parseInt(preview_item.find(".preview_item_quantity").text());
			quantity += 1;

			var new_price = quantity * price;

			preview_item.find(".preview_item_quantity").text(quantity);
			preview_item.find(".preview_item_price").attr("data-price", new_price).text("Rs. " + new_price + "/=");
		} else {
			var new_preview_item = "<tr id='preview_item_" + id + "' class='preview_item'>";
			new_preview_item += "<td>" + name + "</td>";
			new_preview_item += "<td class='preview_item_quantity'>" + 1 + "</td>";
			new_preview_item += "<td class='preview_item_price' data-price=" + price + ">Rs. " + price + "/=</td>";
			new_preview_item += "</tr>";

			$("#preview_items").append(new_preview_item);
		}

		// Calculating total
		var total = 0;
		$("#preview_items").find(".preview_item").each(function(index, item) {
			console.log($(this).find(".preview_item_price").attr("data-price"));
			total += parseInt($(this).find(".preview_item_price").attr("data-price"));
		});
		$("#order_total").text(total);

	});

});