<div class="bodyContainer">
   <button type="button" class="searchBtn btn btn-primary" data-toggle="collapse" data-target="#searchBar">Search For Sale</button>
   <form id="searchBar" class="searchBar collapse" action="search.php" method="POST">
      <h1>Search</h1>
      <div class="form-group input-group mb-3">
         <div class="input-group-prepend">
            <span class="input-group-text">Max-Price</span>
         </div>
         <input type="number" class="form-control" name="priceHigh" placeholder="Max Price">
      </div>
      <div class="form-group">
         <select name="bedrooms" class="custom-select">
            <option selected># Bedrooms</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4+</option>
         </select>
      </div>
      <div class="form-group">
         <select name="bathrooms" class="custom-select">
            <option selected># Bathrooms</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4+</option>
         </select>
      </div>
      
      <button type="submit" name="search" class="btn btn-primary">Search</button>
   </form>
</div>