<?php if($dishes != null || !empty($dishes)): ?> 
<div class="container m-2">
    <h3 class="mb-4">Összes termék</h3>
    <div class="row">
        <?php foreach($dishes as $item): ?>
            <div class="card m-3 mx-lg-auto" style="width: 16rem;">
                <?php if($item['image']): ?>
                    <img class="card-img-bottom" src="<?=base_url('uploads/dish/'.$item['image'])?>" alt="Card image cap">
                <?php else: ?>
                    <img class="card-img-bottom" src="<?=base_url('bootstrap/images/Dish_placeholder.png')?>" alt="Nincs elérhető kép!">
                <?php endif; ?>
                <div class="card-body">
                    <h4 class="card-title"><?=$item['name']?></h5>
                    <p class="card-text"><?=$item['price']?> Ft</p>
                    <?php if($this->ion_auth->logged_in()): ?>
                        <a href="<?=base_url('cart/add/'.$item['id'])?>" class="btn btn-sm btn-dark">Kosárba</a>
                    <?php else: ?>
                        <small>Rendeléshez regisztráljon vagy lépjen be!</small>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach;?>
            </div>
    <?php else: ?>
        <h2 class="text-center">Nincs megjeleníthető étel!</h2>
    <?php endif; ?>
</div>

