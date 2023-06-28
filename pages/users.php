<head>
    <title>Пользователи</title>
</head>

<div class="container">
		<div class="row">
			<div class="col mt-1">
			<button class="btn btn-secondary mb-1" data-toggle="modal" data-target="#user-add-Modal">Добавить пользователя</button>
			<a href="?page=1"><button type="submit" name="project-page" class="btn btn-light mb-1">Страница с проектами</button></a>
				<table class="table shadow ">
					<thead class="thead-light">
						<tr>
							<th>Имя</th>
							<th>Фамилия</th>
							<th>Дата рождения (г.; м.; д.)</th>
							<th>Должность</th>
							<th>Назначенный проект</th>
							<th></th>
							<th></th>
						</tr>
						<?php foreach ($users as $user) { ?>
						<tr >
							<td><?=$user['name'] ?></td>
							<td><?=$user['last_name'] ?></td>
							<td><?=$user['date_birth'] ?></td>
							<td><?=$user['post'] ?></td>
							<td><?=$user['current_project'] ?></td>
							<td>
								<a href="?edit=<?=$user['id'] ?>" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#user-edit-modal<?=$user['id'] ?>">Изменить</a>
								<?php require 'pages/edit.php'; ?>
							</td>
							<td>
								<a href="?delete=<?=$user['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#user-delete-modal<?=$user['id'] ?>">Удалить</a>
								<?php require 'pages/delete.php'; ?>
							</td>
						</tr> <?php } ?>
					</thead>
				</table>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="user-add-Modal">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content shadow">
	      <div class="modal-header">
	        <h5 class="modal-title">Добавить пользователя</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="" method="post">
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="name" value="" placeholder="Имя">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="last_name" value="" placeholder="Фамилия">
	        	</div>
				<div class="form-group">
	        		<input type="text" class="form-control" name="date_birth" value="" onfocus="(this.type='date')" max="<?=date('Y-m-d')?>" placeholder="Дата рождения">
	        	</div>
	        	<div class="form-group">
                    <select name="post" class="form-control">
                        <option hidden value="Нет" selected="true" >--Выберите должность (по умолчанию: Нет)--</option>
                        <option value="Нет">Нет</option>
                        <option value="Backend-разработчик">Backend-разработчик</option>
                        <option value="Системный администратор">Системный администратор</option>
                        <option value="Тестировщик">Тестировщик</option>
                        <option value="Тимлид">Тимлид</option>
                        <option value="Frontend-разработчик">Frontend-разработчик</option>
                        <option value="Дизайнер">Дизайнер</option>
                        <option value="HR-менеджер">HR-менеджер</option>
                        <option value="Продакт-менеджер">Продакт-менеджер</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="current_project" class="form-control" style='margin-top:3%;'>
                        <option hidden value="Нет" selected="true" >--Выберите проект (по умолчанию: Нет)--</option>
                        <option value="Нет">Нет</option>
                        <?php foreach ($projects as $project) { ?>
                            <option value="<?=$project["name"] ?>"><?=$project["name"] ?></option>
                        <?php } ?>
                    </select>
	        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
	        <button type="submit" name="user-add-submit" class="btn btn-primary">Добавить</button>
	      </div>
	  		</form>
	    </div>
	  </div>
	</div>

