<?php
include('view/header.php');
?>

<section class="assignment-container">
    <h2>Assignments</h2>
    <form action="." method="get">
        <select name="course_id">
            <option value="0">View All</option>
            <?php foreach ($courses as $course) : ?>
                <option value="<?= $course['courseID'] ?>" <?= $course_id == $course['courseID'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($course['courseName']) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Go</button>
    </form>

    <?php if (!empty($assignments)) : ?>
        <?php foreach ($assignments as $assignment) : ?>
            <div class="assignment-item">
                <p><strong><?= htmlspecialchars($assignment['courseName']) ?></strong></p>
                <p><?= htmlspecialchars($assignment['Description']) ?></p>
                <form action="update_assignment.php" method="get">
                    <input type="hidden" name="assignment_id" value="<?= $assignment['ID'] ?>">
                    <button type="submit" class="edit-button">Edit</button>
                </form>
                <form action="." method="post">
                    <input type="hidden" name="action" value="delete_assignment">
                    <input type="hidden" name="assignment_id" value="<?= $assignment['ID'] ?>">
                    <button type="submit" class="remove-button" onclick="return confirm('Are you sure you want to delete this assignment?')">X</button>
                </form>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p>No assignments exist<?= $course_id ? ' for this course' : '' ?> yet.</p>
    <?php endif; ?>
</section>

    
<section class="assignment-container">
    <h2>Update Assignment</h2>
    <form action="update_assignment.php" method="post">
        <input type="hidden" name="assignment_id" value="<?= $assignment['ID'] ?>">
        <label>Description:</label>
        <input type="text" name="description" maxlength="120" value="<?= htmlspecialchars($assignment['Description']) ?>" required>
        <label>Course:</label>
        <select name="course_id" required>
            <?php foreach ($courses as $course) : ?>
                <option value="<?= $course['courseID'] ?>" <?= $assignment['courseID'] == $course['courseID'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($course['courseName']); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="action" value="update_assignment">Update</button>
    </form>
</section>

<p><a href=".?action=list_courses">View/Edit Courses</a></p>

<?php
include('view/footer.php');
?>
