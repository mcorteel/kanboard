<?= $this->hook->render('template:task:show:top', array('task' => $task, 'project' => $project)) ?>

<?= $this->render('task/details', array(
    'task' => $task,
    'project' => $project,
    'editable' => $this->user->hasProjectAccess('taskmodification', 'edit', $project['id']),
)) ?>

<?= $this->hook->render('template:task:show:before-description', array('task' => $task, 'project' => $project)) ?>

<?= $this->render('task/description', array('task' => $task)) ?>

<?= $this->hook->render('template:task:show:before-subtasks', array('task' => $task, 'project' => $project)) ?>

<?= $this->render('subtask/show', array(
    'task' => $task,
    'subtasks' => $subtasks,
    'project' => $project,
    'users_list' => isset($users_list) ? $users_list : array(),
    'editable' => true,
)) ?>

<?= $this->hook->render('template:task:show:before-tasklinks', array('task' => $task, 'project' => $project)) ?>

<?= $this->render('tasklink/show', array(
    'task' => $task,
    'links' => $links,
    'project' => $project,
    'link_label_list' => $link_label_list,
    'editable' => true,
    'is_public' => false,
)) ?>

<?= $this->hook->render('template:task:show:before-timetracking', array('task' => $task, 'project' => $project)) ?>

<?= $this->render('task/time_tracking_summary', array('task' => $task)) ?>

<?= $this->hook->render('template:task:show:before-attachements', array('task' => $task, 'project' => $project)) ?>

<?= $this->render('task_file/show', array(
    'task' => $task,
    'files' => $files,
    'images' => $images
)) ?>

<?= $this->hook->render('template:task:show:before-comments', array('task' => $task, 'project' => $project)) ?>

<?= $this->render('task/comments', array(
    'task' => $task,
    'comments' => $comments,
    'project' => $project,
    'editable' => $this->user->hasProjectAccess('comment', 'edit', $project['id']),
    'avatars' => $this->app->config->get('integration_gravatar') == 1,
    'commentsSorting' => $commentsSorting
)) ?>

<?= $this->hook->render('template:task:show:bottom', array('task' => $task, 'project' => $project)) ?>
