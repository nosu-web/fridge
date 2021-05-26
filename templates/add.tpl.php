<div class="container my-5">
    <h1>Добавление ингредиентов</h1>
    <form class="form-add mx-auto" action="add.php" method="post">
        <?= $formError ?>
        <div class="mb-3">
            <label for="ingName" class="form-label">Название</label>
            <input type="text" name="ingName" class="form-control" id="ingName">
        </div>
        <div class="mb-3">
            <select name="ingMeasure" id="ingMeasure">
                <?= $ingMeasureOptions ?>
            </select>
        </div>
        <button type="submit" name="addSubmit" class="btn btn-success">Добавить</button>
    </form>
</div>