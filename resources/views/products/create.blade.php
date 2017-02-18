@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Products</div>
                <div class="panel-body">
                    <form method="POST" action="/products">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputFile">File Image</label>
                            <!-- <input type="file" id="exampleInputFile"> -->
                            <input type="text" class="form-control" id="product_image" placeholder="Product Image" name="product_image">
                            <!-- <p class="help-block">5mb Max</p> -->
                        </div>
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" class="form-control" id="product_name" placeholder="Product Name" name="product_name">
                        </div>
                        <div class="form-group">
                            <label for="product_description">Product Description</label>
                            <textarea class="form-control" id="product_description" placeholder="Product Description" name="product_description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="product_description">Amount</label>
                            <input type="text" class="form-control" id="amount" placeholder="Product Description" name="amount">
                        </div>
                        <div class="form-group">
                            <label for="product_description">Category</label>
                            <select class="form-control" id="category" name="category">
                                <option value="Computers">Computers</option>
                                <option value="Consumer Electronics">Consumer Electronics</option>
                                <option value="Pets and Animals">Pets and Animals</option>
                                <option value="Mobile Phones and Tablets">Mobile Phones and Tablets</option>
                                <option value="Home and Furniture">Home and Furniture</option>
                                <option value="Beauty, Health and Grocery">Beauty, Health and Grocery</option>
                                <option value="Clothing and Accessories">Clothing and Accessories</option>
                                <option value="Books, Sports and Hobbies">Books, Sports and Hobbies</option>
                                <option value="Baby Stuff and Toys">Baby Stuff and Toys</option>
                                <option value="Real Estates">Real Estates</option>
                                <option value="Cars and Automotives">Cars and Automotives</option>
                                <option value="Services">Services</option>
                                <option value="Jobs">Jobs</option>
                                <option value="Business and Earning Opportunities">Business and Earning Opportunities</option>
                                <option value="Motorcycles">Motorcycles</option>
                                <option value="Appliances">Appliances</option>
                            </select>
                        </div>
                        <div class="checkbox">
                        <label>
                            <input type="checkbox"> Notify me!
                        </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection