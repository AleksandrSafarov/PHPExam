<!-- Edit Users -->
<div class="modal fade" id="user-edit-modal<?=$user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?id=<?=$user['id'] ?>" method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_name" value="<?=$user['name'] ?>" placeholder="Имя">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_last_name" value="<?=$user['last_name'] ?>" placeholder="Фамилия">
        	</div>
            <div class="form-group">
        		<input type="date" class="form-control" name="edit_date_birth" value="<?=$user['date_birth'] ?>" max="<?=date('Y-m-d')?>" placeholder="Дата рождения">
        	</div>
        	<div class="form-group">
            	<select name="edit_post" class="form-control">
					<option hidden value="Нет" selected="true">--Выберите должность (по умолчанию: Нет)--</option>
					<option value="Нет">Нет</option>
					<option value="Backend-разработчик" <?php if($user["post"] == "Backend-разработчик"){?> selected="true" <?php }?>>Backend-разработчик</option>
					<option value="Системный администратор" <?php if($user["post"] == "Системный администратор"){?> selected="true" <?php }?>>Системный администратор</option>
					<option value="Тестировщик" <?php if($user["post"] == "Тестировщик"){?> selected="true" <?php }?>>Тестировщик</option>
					<option value="Тимлид" <?php if($user["post"] == "Тимлид"){?> selected="true" <?php }?>>Тимлид</option>
					<option value="Frontend-разработчик" <?php if($user["post"] == "Frontend-разработчик"){?> selected="true" <?php }?>>Frontend-разработчик</option>
					<option value="Дизайнер" <?php if($user["post"] == "Дизайнер"){?> selected="true" <?php }?>>Дизайнер</option>
					<option value="HR-менеджер" <?php if($user["post"] == "HR-менеджер"){?> selected="true" <?php }?>>HR-менеджер</option>
					<option value="Продакт-менеджер" <?php if($user["post"] == "Продакт-менеджер"){?> selected="true" <?php }?>>Продакт-менеджер</option>
				</select>
			</div>
			<div class="form-group">
				<select name="edit_current_project" class="form-control">
					<option hidden value="Нет" selected="true">--Выберите проект (по умолчанию: Нет)--</option>
					<option value="Нет">Нет</option>
					<?php foreach ($projects as $project) { ?>
                	    <option value="<?=$project["name"] ?>" <?php if($user["current_project"] == $project["name"]){ ?> selected="true"<?php } ?>>
						<?=$project["name"] ?>
					</option>
                	<?php } ?>
				</select>
        	</div>
        	<div class="modal-footer">
        		<button type="submit" name="user-edit-submit" class="btn btn-primary">Изменить</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div>

<!-- Edit Projects -->

<div class="modal fade" id="project-edit-modal<?=$p['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?id=<?=$p['id'] ?>" method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_project_name" value="<?=$p['name'] ?>" placeholder="Название">
        	</div>
            <div class="form-group">
        		<input type="date" class="form-control" name="edit_finish_date" value="<?=$p['finish_date'] ?>" min="<?=date('Y-m-d')?>">
        	</div>
        	<div class="modal-footer">
        		<button type="submit" name="project-edit-submit" class="btn btn-primary">Изменить</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div>