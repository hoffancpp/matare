<?php /* Template Name: FAQ */ ?>

<?php include "header.php" ?>

<p class="par ms-4">მთავარი  > ხშირად დასმული კითხვები</p>
<div class="all justify-content-center align-items-center flex-column mt-5">
    <h1>ხშირად დასმული კითხვები</h1>
    <div class="back d-flex justify-content-between align-items-center mt-5">
        
      <?php $faqs = get_field('faqs', get_the_ID()); ?>

      <div class="accordion" id="accordionExample" style="width: 100%">
          <?php foreach($faqs as $key => $faq): ?>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-heading<?php echo $key; ?>">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo $key; ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapse<?php echo $key; ?>">
              <?php echo $faq['faq']['question']; ?>
            </button>
          </h2>
          <div id="panelsStayOpen-collapse<?php echo $key; ?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?php echo $key; ?>">
            <div class="accordion-body">
              <?php echo $faq['faq']['answer']; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
</div>

<?php include "footer.php" ?>