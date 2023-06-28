<head>
    <title>Проекты</title>
</head>

<div class="container">
	<div class="row">
		<div class="col mt-1">
		<button class="btn btn-secondary mb-1" data-toggle="modal" data-target="#project-add-Modal">Добавить проект</button>
        <a href="?page=0"><button type="submit" name="change-page" class="btn btn-light mb-1">Страница с пользователями</button></a>
			<table class="table shadow ">
				<thead class="thead-light">
					<tr>
						<th>Название</th>
						<th>Запланированная дата завершения</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<?php foreach ($projects as $p) { ?>
						<tr >
							<td><?=$p['name'] ?></td>
							<td><?=$p['finish_date'] ?></td>
							<td>
								<a href="?edit=<?=$p['id'] ?>" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#project-edit-modal<?=$p['id'] ?>">Изменить</a>
								<?php require 'pages/edit.php'; ?>
							</td>
							<td>
								<a href="?delete=<?=$p['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#project-delete-modal<?=$p['id'] ?>">Удалить</a>
								<?php require 'pages/delete.php'; ?>
							</td>
						</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="project-add-Modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title">Добавить проект</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="project_name" value="" placeholder="Название">
        	</div>
			<div class="form-group">
        		<input type="text" class="form-control" name="finish_date" value="" onfocus="(this.type='date')" min="<?=date('Y-m-d')?>" placeholder="Запланированная дата завершения">
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <button type="submit" name="project-add-submit" class="btn btn-primary">Добавить</button>
      </div>
  		</form>
    </div>
  </div>
</div>