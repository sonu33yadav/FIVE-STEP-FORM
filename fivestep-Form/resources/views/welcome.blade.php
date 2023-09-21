<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    <link href="assets/css/main.css?v=1.1" rel="stylesheet" type="text/css" />
</head>
<style>
img {
    max-width: 55%;
}

.form-step .form-group {
    margin-bottom: 15px;
}

.form-step .btns-group {
    margin-top: 20px;
}

/* Custom styling for the table */
.form-step .custom-table th,
.form-step .custom-table td {
    vertical-align: middle;
    padding: 10px;
}

.form-step .custom-table td>select,
.form-step .custom-table td>input {
    width: 100%;
    padding: 5px;
}

.form-step .btn-add-row {
    background-color: #433bb7;
    color: #ffffff;
    margin: 10px 0;
    text-align: center;
    padding: 8px 13px;
}
</style>

<body>
    <div class="form-container">
        <form class="form multi-steps_forms" id="formData" method="post" enctype="multipart/form-data">
            @csrf
            <div style="width: 100%; text-align: center;">
                <h1 style="font-size:18px;     color: #000000;">
                    Product Listing Form For B2C
                </h1>
            </div>
            <div class="progressbar">
                <div class="progress" id="progress"></div>
                <div class="progress-step progress-step-active" data-title="Details"></div>
                <div class="progress-step" data-title="Description"></div>
                <div class="progress-step" data-title="Images"></div>
                <div class="progress-step" data-title="Pricing"></div>
                <div class="progress-step" data-title="Variant"></div>
            </div>

            <!-- <form class="form multi-steps_forms" id="formData">
                @csrf
                <div class="container"> -->
            <div class="form-step form-step-active">
                <!-- Step 1 content -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group">
                            <label for="productType">Main Category </label>
                            <span style="color: red; margin-left: 5px;">*</span>
                            <select id="productType" name="productType" required>
                                <option value="" disabled selected>Select Product Type</option>
                                <option value="Type 1">Type 1</option>
                                <option value="Type 2">Type 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <label for="subCategory">Sub Category</label>
                            <span style="color: red; margin-left: 5px;">*</span>
                            <select id="subCategory" name="subCategory" required>
                                <option value="" disabled selected>Select Sub Category</option>
                                <option value="Subcategory 1">Subcategory 1</option>
                                <option value="Subcategory 2">Subcategory 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group">
                            <label for="productName">Product Name</label>
                            <span style="color: red; margin-left: 5px;">*</span>
                            <input type="text" name="productName" id="productName" required />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="input-group">
                            <label>Product Type</label>
                            <div class="form-check">
                                <input type="radio" name="vegNonVeg" id="veg" value="Veg" />
                                <label for="veg">Veg</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="vegNonVeg" id="nonVeg" value="Non-Veg" />
                                <label for="nonVeg">Nonveg</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="vegNonVeg" id="na" value="N/A" />
                                <label for="na">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group">
                            <label for="summary">Summary</label>
                            <textarea style="width: 100%;" name="summary" id="summary"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="btns-group">
                            <a href="#" style=" background-color: #433bb7;visibility: hidden; padding: 5px 11px;"
                                class="btn btns btn-prev"><i class="fa-solid fa-backward"></i></a>
                            <div style="display: flex;">
                                <a style="margin-right:6px; background-color: #433bb7;     padding: 4px 1rem;" href="#"
                                    class="btn btns btn-prev"> <i style="margin-right:6px;"
                                        class="fa-solid fa-newspaper"></i>Draft</a>

                                <a href="#" class="btn btns btn-next" style="padding: 5px 11px;"> <i
                                        class="fa-solid fa-forward"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- </form> -->
    <div class="container">
        <!-- <form class="form multi-steps_forms" id="formData"> -->
        <!-- @csrf -->
        <div class="form-step">
            <!-- Step 2 content -->

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="input-group">
                        <label for="editor">Description</label>
                        <span style="color: red; margin-left: 5px;">*</span>
                        <textarea name="editor" id="editor"></textarea required>
                   </div>
                 </div>
                 <div class="col-md-3 col-lg-3">
                   <div class="input-group">
                     <label for="input1">HSN Code</label>
                     <span style="color: red; margin-left: 5px;">*</span>
                     <input type="text" name="hsn" id="input1" required />
                   </div>
                 </div>
                 <div class="col-md-3 col-lg-3">
                   <div class="input-group">
                     <label for="input2">Origin</label>

                     <input type="text" name="origin" id="input2" value="India" />
                   </div>
                 </div>
                 <div class="col-md-3 col-lg-3">
                   <div class="input-group">
                     <label for="input3">SKU</label>
                     <span style="color: red; margin-left: 5px;">*</span>
                     <input type="text" name="sku" id="input3" required/>
                   </div>
                 </div>
                 <div class="col-md-3 col-lg-3">
                   <div class="input-group">
                     <label for="select">GST Rate (%)</label>
                     <span style="color: red; margin-left: 5px;">*</span>
                     <select id="select" name="gstRate" required>
                       <option value="" disabled selected>Select Option</option>
                       <option value="5">5</option>
                       <option value="8">8</option>
                       <option value="12">12</option>
                       <option value="15">15</option>
                       <option value="18">18</option>
                     </select>
                   </div>
                 </div>
                 <div class="col-md-12">
                   <div class="btns-group">
                     <a href="#" style=" background-color: #433bb7; padding: 5px 11px;" class="btn btns btn-prev"><i class="fa-solid fa-backward"></i></a>
                     <div style="display: flex;">
                       <a style="margin-right:6px; background-color: #433bb7;     padding: 4px 1rem;" href="#" class="btn btns btn-prev"> <i style="margin-right:6px;" class="fa-solid fa-newspaper"></i>Draft</a>

                     <a href="#" class="btn btns btn-next" style="padding: 5px 11px;"> <i class="fa-solid fa-forward"></i> </a>
                   </div>
                   </div>
                 </div>
               </div>
            </div>

           </div>

           <div class="form-step">
             <!-- Step 3 content -->
             <div class="container">
               <div class="row">

                 <div class="col-lg-3 col-md-6 col-sm-12">
                   <div class="input-group">
                     <div class="image-container">
                       <label for="image1">Product Front Image
                    <span style="color: red; margin-left: 5px;">*</span>

                       </label>
                    <!-- Example image input element -->
                    <input
                    type="file"
                    accept="image/*"
                    name="front_image"
                    id="image1"
                    class="custom-file-input"
                    data-max-width="500"
                    data-max-height="700"
                    data-preview-image-id="preview-image1"/>
                       <img src="https://spicebucket.com/images/upload.png" alt="Product Front Image" id="preview-image1" />
                     </div>
                   </div>
                 </div>

                 <div class="col-lg-3 col-md-6 col-sm-12">
                   <div class="input-group">
                     <div class="image-container">
                       <label for="image2">Product Back Image
                    <span style="color: red; margin-left: 5px;">*</span>

                       </label>
                       <img src="https://spicebucket.com/images/upload.png" alt="Veg/Non-veg Logo" id="preview-image2" />
                       <input
                         type="file"
                         accept="image/*"
                         name="back_image"
                         id="image2"
                         class="custom-file-input"
                         required
                       />
                     </div>
                   </div>
                 </div>

                 <div class="col-lg-3 col-md-6 col-sm-12">
                   <div class="input-group">
                     <div class="image-container">
                       <label for="image3">FASSAI No. Image
                    <span style="color: red; margin-left: 5px;">*</span>

                       </label>
                       <img src="https://spicebucket.com/images/upload.png" alt="FASSAI No. Image" id="preview-image3" />
                       <input
                         type="file"
                         accept="image/*"
                         name="fassai_image"
                         id="image3"
                         class="custom-file-input"
                         required
                       />
                     </div>
                   </div>
                 </div>

                 <div class="col-lg-3 col-md-6 col-sm-12">
                   <div class="input-group">
                     <div class="image-container">
                       <label for="image4">Veg/Non-Veg Logo
                    <span style="color: red; margin-left: 5px;">*</span>

                       </label>
                       <img src="https://spicebucket.com/images/upload.png" alt="Product Front Image (Variant 1)" id="preview-image4" />
                       <input
                         type="file"
                         accept="image/*"
                         name="vegNonVegLogo"
                         id="image4"
                         class="custom-file-input"
                         required
                       />
                     </div>
                   </div>
                 </div>

                 <div class="col-lg-3 col-md-6 col-sm-12">
                   <div class="input-group">
                     <div class="image-container">
                       <label for="image5">Ingrident Details
                    <span style="color: red; margin-left: 5px;">*</span>

                       </label>
                       <img src="https://spicebucket.com/images/upload.png" alt="Product Image" id="preview-image5" />
                       <input
                         type="file"
                         accept="image/*"
                         name="ingrident_detail"
                         id="image5"
                         class="custom-file-input"
                         required
                       />
                     </div>
                   </div>
                 </div>

                 <div class="col-lg-3 col-md-6 col-sm-12">
                   <div class="input-group">
                     <div class="image-container">
                       <label for="image6">Product Image</label>
                       <img src="https://spicebucket.com/images/upload.png" alt="Product Image" id="preview-image6" />
                       <input
                         type="file"
                         accept="image/*"
                         name="product_image"
                         id="image6"
                         class="custom-file-input"

                       />
                     </div>
                   </div>
                 </div>

                 <div class="col-lg-3 col-md-6 col-sm-12">
                   <div class="input-group">
                     <div class="image-container">
                       <label for="image7">Product Image</label>
                       <img src="https://spicebucket.com/images/upload.png" alt="Product Image" id="preview-image7" />
                       <input
                         type="file"
                         accept="image/*"
                         name="product_image2"
                         id="image7"
                         class="custom-file-input"

                       />
                     </div>
                   </div>
                 </div>

                 <div class="col-lg-3 col-md-6 col-sm-12">
                   <div class="input-group">
                     <div class="image-container">
                       <label for="image8">Product Image</label>
                       <img src="https://spicebucket.com/images/upload.png" alt="Ingredient Details" id="preview-image8" />
                       <input
                         type="file"
                         accept="image/*"
                         name="product_image3"
                         id="image8"
                         class="custom-file-input"

                       />
                     </div>
                   </div>
                 </div>

               </div>
             </div>


             <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-12">

             <div class="input-group">
               <label for="basic-url" class="form-label">VIDEO CODE</label>
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://www.youtube.com/embed/</span>
           <input type="text" class="form-control" name="vedioCode1" id="basic-url" aria-describedby="basic-addon3">
              </div>
             </div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-12">

             <div class="input-group">
               <label for="basic-url" class="form-label">VIDEO CODE</label>
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://www.youtube.com/embed/</span>
           <input type="text" class="form-control" name="vedioCode2" id="basic-url" aria-describedby="basic-addon3">
              </div>
             </div>
             </div>
           <div class="col-lg-6 col-md-6 col-sm-12">

             <div class="input-group">
               <label for="basic-url" class="form-label">VIDEO CODE</label>
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://www.youtube.com/embed/</span>
           <input type="text" class="form-control" name="vedioCode3" id="basic-url" aria-describedby="basic-addon3">
              </div>
             </div>
             </div>
           <div class="col-lg-6 col-md-6 col-sm-12">

             <div class="input-group">
               <label for="basic-url" class="form-label">VIDEO CODE</label>
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://www.youtube.com/embed/</span>
           <input type="text" class="form-control" name="vedioCode4" id="basic-url" aria-describedby="basic-addon3">
              </div>
             </div>
             </div>

           </div>

           <div class="col-md-12">
             <div class="btns-group">
               <a href="#" style=" background-color: #433bb7;     padding: 5px 11px;" class="btn btns btn-prev"><i class="fa-solid fa-backward"></i></a>
               <div style="display: flex;">
                 <a style="margin-right:6px; background-color: #433bb7;     padding: 4px 1rem;" href="#" class="btn btns btn-prev"> <i style="margin-right:6px;" class="fa-solid fa-newspaper"></i>Draft</a>

               <a href="#" class="btn btns btn-next" style="padding: 5px 11px;"> <i class="fa-solid fa-forward"></i> </a>
             </div>
             </div>
           </div>
           <!-- </form> -->
           </div>

     <!-- step 4 -->

           <div class="container">
             <!-- <form class="form multi-steps_forms" id="formData">
                @csrf -->
             <div class="form-step">
                <!-- step 4 -->
               <div class="row">

                 <div class="col-md-12 col-lg-4">
                   <div class="input-group">
                     <label for="editor">MRP</label>
                    <span style="color: red; margin-left: 5px;">*</span>

                     <input type="text" name="mrp" id="input1" required />

                   </div>
                 </div>
                 <div class="col-md-3 col-lg-4">
                   <div class="input-group">
                     <label for="input1">Discount %</label>
                    <span style="color: red; margin-left: 5px;">*</span>

                     <input type="text" name="discount" id="input1" required />
                   </div>
                 </div>
                 <div class="col-md-3 col-lg-4">
                   <div class="input-group">
                     <label for="input2">Selling Price</label>
                     <input type="text" name="sellingPrice" id="input2" />
                   </div>
                 </div>
                 <div class="col-md-3 col-lg-4">
                   <div class="input-group">
                     <label for="input3">Min Qty</label>
                    <span style="color: red; margin-left: 5px;">*</span>

                     <input type="text" name="minQty" id="input3" required />
                   </div>
                 </div>
                 <div class="col-md-3 col-lg-4">
                   <div class="input-group">
                     <label for="select">Max Qty</label>
                    <span style="color: red; margin-left: 5px;">*</span>

                     <input type="text" name="maxQty" id="input3" required />

                   </div>
                 </div>
                 <div class="col-md-3 col-lg-4">
                   <div class="input-group">
                     <label for="select">Cost Price</label>
                     <input type="text" name="costPrice" id="input3"/>

                   </div>
                 </div>

               </div>
               <div class="row">
                 <div class="col-md-3 col-lg-12">
                   <div class="input-group">
                     <div style="display: flex; justify-content: space-evenly; width: 10%;">
                     <label for="select">Taxable</label>

                     <input class="form-check-input" type="checkbox" value="1" id="taxable" name="taxable" checked="" required>
                   </div>
                   </div>
                 </div>
                 <div class="col-md-3 col-lg-4">
                   <div class="input-group">
                     <label for="select">Tax Rate</label>
                    <span style="color: red; margin-left: 5px;">*</span>

                     <input type="text" name="taxreate" id="input3" required />

                   </div>
                 </div>
                 <div class="col-md-3 col-lg-4">
                   <div class="input-group">
                     <label for="select">Tax Amount</label>
                     <input type="text" name="taxamount" id="input3"/>

                   </div>
                 </div>
                 <div class="col-md-3 col-lg-4">
                   <div class="input-group">
                     <label for="select">Net Price </label>
                     <input type="text" name="newprice" id="input3"/>

                   </div>
                 </div>
                 <div class="col-md-12">
                   <div class="btns-group">
                     <a href="#" style=" background-color: #433bb7;     padding: 5px 11px;" class="btn btns btn-prev"><i class="fa-solid fa-backward"></i></a>
                     <div style="display: flex;">
                       <a style="margin-right:6px; background-color: #433bb7;     padding: 4px 1rem;" href="#" class="btn btns btn-prev"> <i style="margin-right:6px;" class="fa-solid fa-newspaper"></i>Draft</a>

                     <a href="#" class="btn btns btn-next" style="padding: 5px 11px;"> <i class="fa-solid fa-forward"></i> </a>
                   </div>
                   </div>
                 </div>
               </div>
             </div>
             <!-- </form> -->
           </div>




          <div class="container">
         <div class="form-step">
          <!--  -->
           <!-- Step 5 content -->
           <div style="width: 100%; text-align: right;">
             <button class="btn btn-primary btn-sm rounded btn-add-row" onclick="addRow()">
               <i class="fa-solid fa-plus"></i><a href="#" style="color: #ffffff;">Add Row</a>
             </button>
           </div>
           <div class="table-responsive ">
             <table class="table table-striped table-hover custom-table" id="dataTable">
               <thead class="text-center">
                 <tr>
                   <th>Type</th>
                   <th>Weight</th>
                   <th>Unit</th>
                   <th> MRP</th>
                   <th>Discount</th>
                   <th>Selling Price</th>
                   <th>SKU(Optional)</th>
                   <th>Barcode(Optional)</th>
                   <th>Quantity</th>
                   <th>Default</th>
                   <th>Image</th>
                   <th>Delete</th>
                 </tr>
               </thead>
               <tbody class="text-center">
                <!-- <form class="form multi-steps_forms" id="formData">
                    @csrf -->
                 <tr>
                   <td width="10%">
                     <select name="packagetype">
                       <option>package type1</option>
                       <option>page2</option>
                       <option>page3</option>
                     </select>
                   </td>
                   <td>

                     <input type="text" name="Weight" />
                   </td>
                   <td>

                     <select  name="unit">
                       <option>page1</option>
                       <option>page2</option>
                       <option>page3</option>
                     </select>
                   </td>
                   <td>
                     <input type="text" name="MRP" />
                   </td>
                   <td>
                     <input type="text" name="Discount" />
                   </td>
                   <td>
                     <input type="text" name="SellingPrice" />
                   </td>
                   <td>
                     <input type="text" name="sku"/>
                   </td>
                   <td>
                     <input type="text" name="barcode" />
                   </td>
                   <td>
                     <input type="text" name="quantity" />
                   </td>
                   <td>
                     <input type="checkbox" name="default" />
                   </td>
                   <td>
                     <!-- Use label to trigger the file input -->
                     <label for="image3" class="custom-file-label image-wrapper">
                       <img src="https://spicebucket.com/images/upload.png" alt="FASSAI No. Image" id="preview-image3" />
                     </label>
                     <input
                       type="file"
                       accept="image/*"
                       name="last_image"
                       id="image3"
                       class="custom-file-input"
                       required
                     />
                   </td>
                   <td >
                     <i class="fa-solid fa-trash"></i>
                     <!-- <button class="btn btn-danger btn-sm">Delete</button> -->
                   </td>
                 </tr>
                 <!-- </form> -->
               </tbody>
             </table>
           </div>
           <!-- table-responsive.// -->
           <!-- <div class="btns-group">
             <a href="#" class="btn btns btn-prev">Previous</a>
             <input type="submit" value="Submit" class="btn" />
           </div> -->

           <div class="col-md-12">
             <div class="btns-group">
               <a href="#" style=" background-color: #433bb7;     padding: 5px 11px;" class="btn btns btn-prev"><i class="fa-solid fa-backward"></i></a>
               <div style="display: flex;">
                 <a style="margin-right:6px; background-color: #433bb7;     padding: 4px 1rem;" href="#" class="btn btns btn-prev"> <i style="margin-right:6px;" class="fa-solid fa-newspaper"></i>Draft</a>

               <button type="submit" id="Submit"  class="btn btns" style="padding: 5px 11px;"> <i class="fa-solid fa-forward"></i></button>
             </div>
             </div>
           </div>
         </div>
       </div>
       </form>
             <!-- ... Display a summary of the user's inputs ... -->

     </div>


           <script src="{{asset('assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
           <script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
           <script src="{{asset('assets/js/vendors/select2.min.js')}}"></script>
           <script src="{{asset('assets/js/vendors/perfect-scrollbar.js')}}"></script>
           <script src="{{asset('assets/js/vendors/jquery.fullscreen.min.js')}}"></script>
           <!-- Main Script -->
           <script src="{{asset('assets/js/main.js?v=1.1')}}" type="text/javascript"></script>



           <script>
            document.addEventListener("DOMContentLoaded", function () {
                const productBtn = document.getElementById("productBtn");
                const variantBtn = document.getElementById("variantBtn");
                const productTable = document.getElementById("productTable");
                const variantTable = document.getElementById("variantTable");

                productBtn.addEventListener("click", function () {
                    productTable.style.display = "block";
                    variantTable.style.display = "none";
                });

                variantBtn.addEventListener("click", function () {
                    productTable.style.display = "none";
                    variantTable.style.display = "block";
                });
            });











 const nextBtns = document.querySelectorAll(".btn-next");
const prevBtns = document.querySelectorAll(".btn-prev");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");
const progressBar = document.getElementById("progress");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    if (validateForm(formSteps[formStepsNum])) {
      formStepsNum++;
      updateFormSteps();
      updateProgressbar();
    }
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function validateForm(step) {
  const inputs = step.querySelectorAll("input, textarea, select");
  let isValid = true;
  inputs.forEach((input) => {
    if (input.hasAttribute("required") && !input.value.trim()) {
      isValid = false;
      input.classList.add("invalid");
    } else {
      input.classList.remove("invalid");
    }
  });
  return isValid;
}

function updateFormSteps() {
  formSteps.forEach((formStep, index) => {
    if (index === formStepsNum) {
      formStep.classList.add("form-step-active");
    } else {
      formStep.classList.remove("form-step-active");
    }
  });
}

function updateProgressbar() {
  const progressPercent = (formStepsNum / (formSteps.length - 1)) * 100;
  progressBar.style.width = `${progressPercent}%`;

  progressSteps.forEach((progressStep, index) => {
    if (index <= formStepsNum) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });
}

// JavaScript code for image validation and preview
function validateImage(input, previewImageId, maxWidth, maxHeight) {
  const selectedFile = input.files[0];
  const imageSizeLimit = 2 * 1024 * 1024; // 2 MB

  if (selectedFile) {
    if (selectedFile.size > imageSizeLimit) {
      alert("Image size should be less than 2MB.");
      input.value = ""; // Clear the selected file
      return false;
    }

    const img = new Image();
    img.src = URL.createObjectURL(selectedFile);

    return new Promise((resolve, reject) => {
      img.onload = function () {
        if (img.width > maxWidth || img.height > maxHeight) {
          alert(`Image dimensions should be within ${maxWidth}x${maxHeight} pixels.`);
          input.value = ""; // Clear the selected file
          resolve(false);
        } else {
          const imagePreview = document.getElementById(previewImageId);
          imagePreview.style.display = "block";
          imagePreview.src = img.src;
          resolve(true);
        }
      };
    });
  } else {
    const imagePreview = document.getElementById(previewImageId);
    imagePreview.style.display = "block";
    imagePreview.src = "https://spicebucket.com/images/upload.png"; // Set default image
    return Promise.resolve(true); // No file selected, still consider as valid
  }
}

// Add event listener to each file input
const fileInputs = document.querySelectorAll(".custom-file-input");
fileInputs.forEach((input) => {
  input.addEventListener("change", async (e) => {
    const maxWidth = parseInt(input.getAttribute("data-max-width"));
    const maxHeight = parseInt(input.getAttribute("data-max-height"));
    const previewImageId = input.getAttribute("data-preview-image-id");
    const isValid = await validateImage(input, previewImageId, maxWidth, maxHeight);
    if (!isValid) {
      // Validation failed, you can add additional handling here if needed
    }
  });
});
</script>
<script>
    var submitPolicyData = {

        __ajax_submit_accounts_details: function(data) {

            $.ajax({
                type: 'POST',
                url: "{{route('add-product')}}",
                data: data,
                beforeSend: function() {
                    $(".error").text('');
                },
            })

        }
    }
$(document).ready(function() {
        $('body').on('click', '#Submit', function() {
            var data = new FormData($("#formData")[0]);
            console.log(data);
            submitPolicyData.__ajax_submit_accounts_details(data);
        })
    });
</script>


<script>
    // JavaScript to handle image selection and display
    document.addEventListener("DOMContentLoaded", function () {
      function setupImagePreview(inputId, imageId) {
        const imageInput = document.getElementById(inputId);
        const imagePreview = document.getElementById(imageId);

        imagePreview.addEventListener("click", function () {
          imageInput.click();
        });

        imageInput.addEventListener("change", function () {
          const file = imageInput.files[0];
          if (file) {
            const reader = new FileReader();

            reader.addEventListener("load", function () {
              imagePreview.src = reader.result;
            });

            reader.readAsDataURL(file);
          } else {
            // Reset the image preview when no file is selected
            imagePreview.src = "https://spicebucket.com/images/upload.png";
          }
        });
      }

      // Set up image previews for all eight file inputs
      setupImagePreview("image1", "preview-image1");
      setupImagePreview("image2", "preview-image2");
      setupImagePreview("image3", "preview-image3");
      setupImagePreview("image4", "preview-image4");
      setupImagePreview("image5", "preview-image5");
      setupImagePreview("image6", "preview-image6");
      setupImagePreview("image7", "preview-image7");
      setupImagePreview("image8", "preview-image8");
    });
  </script>



  <script>
    function addRow() {
      var table = document.getElementById("dataTable");
      var newRow = table.insertRow();

      // Your table columns for the new row (you can customize this)
      var columns = [
        '<select><option>package type1</option><option>page2</option><option>page3</option></select>',
        '<input type="text" />',
        '<select><option>page1</option><option>page2</option><option>page3</option></select>',
        '<input type="text"/>',
        '<input type="text"/>',
        '<input type="text"/>',
        '<input type="text"/>',
        '<input type="text"/>',
        '<input type="text"/>',
        '<input type="checkbox"/>',
        '<label for="image3" class="custom-file-label image-wrapper text"><img src="https://spicebucket.com/images/upload.png" alt="FASSAI No. Image" id="preview-image3" /></label><input type="file" accept="image/*" name="image" class="custom-file-input" required />',
        '<i class="fa-solid fa-trash class="text-end"></i>'
      ];

      for (var i = 0; i < columns.length; i++) {
        var cell = newRow.insertCell();
        cell.innerHTML = columns[i];
      }
    }
  </script>

</body>
</html>
