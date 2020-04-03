
<?php include 'header.php';?>
<div class="baner row mx-0 mb-5 bg-dark">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-dark rounded-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
    </div>
</div>
<section>
<div class="container">
    <form>
        <table class="table checkout text-center mb-4">
            <thead>
                <tr>
                    <th rowspan="1"></th>
                    <th rowspan="1"></th>
                    <th rowspan="1">Product</th>
                    <th rowspan="1">Price</th>
                    <th rowspan="1">QTY</th>
                    <th rowspan="1">Total</th>
                </tr>
            </thead>
            <tbody>
            <tr class="align-items-center">
                <td><a href="javascript:void(0)"><i class="fas fa-times-circle"></i></a></td>
                <td><a href="javascript:void(0)"><img src="images/gallery_1.jpg"/></a> </td>
                <td><a href="javascript:void(0)">Chanh Dây đỏ Úc</a> </br>
                    Canada</td>
                <td>400,000₫</td>
                <td><input type="number" value="1" min="0"></td>
                <td>400,000₫</td>
            </tr>
            </tbody>
        </table>
        <div class="cart-infor row pt-5 border-top">
            <div class="col-md-6">
                <div class="add-note">
                    <div class="add-note-header">
                        <h3 class="pb-3">SPECIAL INSTRUCTIONS FOR SELLERS</h3>
                    </div>
                    <div class="add-note-content">
                        <textarea rows="8" name="add-note" class="w-100"></textarea>
                    </div>
                    <button type="button" class="btn btn-note border my-4">Add Note</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cart-total">
                    <h4 class="mb-4">Total Cart</h4>
                    <span class="cart-subtotal-title">Total Order</span>
                    <span class="cart-subtotal">400,000₫</span>
                    <p class="shipping">Shipping & taxes charged at checkout</p>
                    <input type="submit" name="update" class="btn btn-update-cart" value="Update Cart">
                    <input type="submit" name="checkout" class="btn btn-checkout" value="Check out">
                </div>
            </div>
        </div>
    </form>
</div>
</section>
<?php include 'footer.php';?>

