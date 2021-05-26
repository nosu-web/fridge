<div class="container my-5">
    <h1>Добавление рецепта</h1>
    <form class="form-add mx-auto" action="recipes.php" method="post">
        <?= $formError ?>
        <div class="mb-3">
            <label for="recipeName" class="form-label">Название</label>
            <input type="text" name="recipeName" class="form-control" id="recipeName">
        </div>
        <div class="mb-3">
            <select class="form-select" name="recipeProduct" id="recipeProduct">
                <?= $productOptions ?>
            </select>
        </div>
        <div><?= $productMeasure ?></div>
        <button type="submit" name="addSubmit" class="btn btn-success">Добавить</button>
    </form>
</div>