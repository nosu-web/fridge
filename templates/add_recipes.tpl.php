<div class="container my-5">
    <h1>Добавление рецепта</h1>
    <form class="form-add mx-auto mt-5" action="recipes.php" method="post">
        <?= $formError ?>
        <div class="mb-3">
            <input type="text" name="recipeName" class="form-control" id="recipeName" placeholder="Название рецепта" required>
        </div>
        <h3>Ингредиенты</h3>
        <div class="ingRows">
            <div class="row mb-3 ingRow">
                <div class="col">
                    <select class="form-select" name="recipeProduct" id="recipeProduct" required>
                        <?= $productOptions ?>
                    </select>
                </div>
                <div class="col">
                    <input type="text" name="ingAmount" class="form-control" id="ingAmount" placeholder="Количество" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="recipeMeasure" id="recipeMeasure" value="<?= $productMeasure ?>" disabled>
                </div>
                <div class="col">
                    <button class="btn btn-primary" id="addIngredientRow">+</button>
                </div>
            </div>
        </div>
        <button type="submit" name="addSubmit" class="btn btn-success">Добавить</button>
    </form>
</div>