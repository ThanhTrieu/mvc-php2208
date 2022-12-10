<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form class="p-3 border" method="POST" action="<?= route('role','store'); ?>">
                <div class="form-group">
                    <label>Vai tro (*)</label>
                    <input name="name" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Mo ta</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <button class="btn btn-primary" name="save"> Luu</button>
            </form>
        </div>
    </div>
</div>