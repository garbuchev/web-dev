<h1><?= htmlspecialchars($this->title) ?></h1>

Hello, I am an authors index view.

<table>
    <tr>
        <th>ID</th>
        <th>name</th>
    </tr>
    <tr>
        <?php foreach ($this->authors as $author): ?>
        <tr>
        <td><?= htmlspecialchars($author['id']) ?></td>
        <td><?= htmlspecialchars($author['name']) ?></td>
    </tr>
        <?php  endforeach?>
    </tr>

</table>