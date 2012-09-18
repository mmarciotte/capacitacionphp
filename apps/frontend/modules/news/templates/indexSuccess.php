<h1>Newss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Body</th>
      <th>Brief</th>
      <th>Image</th>
      <th>Title</th>
      <th>Priority</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Deleted at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($newss as $news): ?>
    <tr>
      <td><a href="<?php echo url_for('news/edit?id='.$news->getId()) ?>"><?php echo $news->getId() ?></a></td>
      <td><?php echo $news->getBody() ?></td>
      <td><?php echo $news->getBrief() ?></td>
      <td><?php echo $news->getImage() ?></td>
      <td><?php echo $news->getTitle() ?></td>
      <td><?php echo $news->getPriority() ?></td>
      <td><?php echo $news->getCreatedAt() ?></td>
      <td><?php echo $news->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('news/new') ?>">New</a>
