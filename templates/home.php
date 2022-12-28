<?php require_once 'templates/header.php'?>
<?php if(isset($_SESSION['USER_ID'])) : ?>
<main>
    <div class="filter-container">
    <div id="filter-title">
        Фильтрация результата поиска
    </div>

    <form action="/index.php" method="get">
            <label>Введите номер сделки в учетной системе</label>
            <input name="number" id="input-number" class="input-item" type="text" placeholder="Номер"></br>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Выберите покупателя</label>
                <select name="name" class="form-control" id="exampleFormControlSelect1">
                    <option></option>
                  <?php foreach ($buyers as $buyer) : ?>
                    <option><?=$buyer['name']?></option>
                  <?php endforeach ?>
                </select>
            </div>
            <label>Укажите массу груза</label>
            <span><input name="min_mass" id="input-mass-ot" class="input-item" type="number" placeholder="От"><span>
            <span><input name="max_mass" id="input-mass-do" class="input-item" type="number" placeholder="До"><span>
            <div class="filter-button-container">
                <button type = "submit" id="apply-filter-btn" class="btn btn-primary">
                    Применить фильтр
                </button>
                <button type = "clear" id="clear-filter-btn" href="" class="btn btn-primary">
                    Очистить фильтр
                </button>
            </div>

        </div>
    </form>

    <div class="articles-cards-conainer">
      <?php foreach ($products as $product) : ?>
        <div class="article-card">
            <div class="container text-center">
                <div class="row">
                    <div class="col-5">
                        <h4>Номер: <?=$product['number']?></h4>
                    </div>
                    <div class="col-5">
                        <h4>Имя: <?=$product['name']?></h4>
                    </div>
                    <div class="col-2">
                        <h4>Масса: <?=$product['mass']?></h4>
                    </div>
                </div>
                <div class="container text-center">
                    <div class="row">
                        <div class="col-6">
                            <div class="articles-image">
                                <img class="preview-image" src="/images/<?=$product['photo']?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="arcticles-text">
                              Состав сделки:
                              <br>
                              <?=$product['composition']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php endforeach ?>
    </div>
</main>
<?php endif;?>
<?php require_once 'templates/footer.php'?>