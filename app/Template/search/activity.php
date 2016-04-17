<section id="main">
    <div class="page-header">
        <ul>
            <li>
                <?= $this->url->button('fa-search', t('Search tasks'), 'search', 'index') ?>
            </li>
        </ul>
    </div>

    <div class="filter-box">
        <form method="get" action="<?= $this->url->dir() ?>" class="search">
            <?= $this->form->hidden('controller', $values) ?>
            <?= $this->form->hidden('action', $values) ?>
            <?= $this->form->text('search', $values, array(), array(empty($values['search']) ? 'autofocus' : '', 'placeholder="'.t('Search').'"'), 'form-input-large') ?>
            <?= $this->render('activity/filter_dropdown') ?>
        </form>
    </div>

    <?php if (empty($values['search'])): ?>
        <div class="listing">
            <h3><?= t('Advanced search') ?></h3>
            <p><?= t('Example of query: ') ?><strong>project:"My project" creator:me</strong></p>
            <ul>
                <li><?= t('Search by project: ') ?><strong>project:"My project"</strong></li>
                <li><?= t('Search by creator: ') ?><strong>creator:admin</strong></li>
                <li><?= t('Search by creation date: ') ?><strong>created:today</strong></li>
                <li><?= t('Search by task status: ') ?><strong>status:open</strong></li>
                <li><?= t('Search by task title: ') ?><strong>title:"My task"</strong></li>
            </ul>
            <p><i class="fa fa-external-link fa-fw"></i><?= $this->url->doc(t('View advanced search syntax'), 'search') ?></p>
        </div>
    <?php elseif (! empty($values['search']) && $nb_events === 0): ?>
        <p class="alert"><?= t('Nothing found.') ?></p>
    <?php else: ?>
        <?= $this->render('event/events', array('events' => $events)) ?>
    <?php endif ?>

</section>
