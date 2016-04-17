<section id="main">
    <div class="page-header">
        <ul>
            <li>
                <?= $this->url->button('fa-folder', t('Projects list'), 'project', 'index') ?>
            </li>
            <?php if ($this->user->hasAccess('projectuser', 'managers')): ?>
                <li><?= $this->url->button('fa-user', t('Users overview'), 'projectuser', 'managers') ?></li>
            <?php endif ?>
        </ul>
    </div>
    <section>
        <?php if (empty($projects)): ?>
            <p class="alert"><?= t('No project') ?></p>
        <?php else: ?>
            <div
                id="gantt-chart"
                data-records='<?= json_encode($projects, JSON_HEX_APOS) ?>'
                data-save-url="<?= $this->url->href('gantt', 'saveProjectDate') ?>"
                data-label-managers="<?= t('Project managers') ?>"
                data-label-members="<?= t('Project members') ?>"
                data-label-gantt-link="<?= t('Gantt chart for this project') ?>"
                data-label-board-link="<?= t('Project board') ?>"
                data-label-start-date="<?= t('Start date:') ?>"
                data-label-end-date="<?= t('End date:') ?>"
                data-label-not-defined="<?= t('There is no start date or end date for this project.') ?>"
            ></div>
        <?php endif ?>
    </section>
</section>
