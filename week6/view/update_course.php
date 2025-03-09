<?php
include('view/header.php');
?>

<section class="course-container">
    <h2>courses</h2>
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

    <?php if (!empty($courses)) : ?>
        <?php foreach ($courses as $course) : ?>
            <div class="course-item">
                <p><strong><?= htmlspecialchars($course['courseName']) ?></strong></p>
                <p><?= htmlspecialchars($course['Description']) ?></p>
                <form action="update_course.php" method="get">
                    <input type="hidden" name="course_id" value="<?= $course['ID'] ?>">
                    <button type="submit" class="edit-button">Edit</button>
                </form>
                <form action="." method="post">
                    <input type="hidden" name="action" value="delete_course">
                    <input type="hidden" name="course_id" value="<?= $course['ID'] ?>">
                    <button type="submit" class="remove-button" onclick="return confirm('Are you sure you want to delete this course?')">X</button>
                </form>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p>No courses exist<?= $course_id ? ' for this course' : '' ?> yet.</p>
    <?php endif; ?>
</section>

    
<section class="course-container">
    <h2>Update course</h2>
    <form action="update_course.php" method="post">
        <input type="hidden" name="course_id" value="<?= $course['courseID'] ?>">
        <label>Description:</label>
        <input type="text" name="description" maxlength="120" value="<?= htmlspecialchars($course['Description']) ?>" required>
        <label>Course:</label>
        <select name="course_id" required>
            <?php foreach ($courses as $course) : ?>
                <option value="<?= $course['courseID'] ?>" <?= $course['courseID'] == $course['courseID'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($course['courseName']); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="action" value="update_course">Update</button>
    </form>
</section>

<p><a href=".?action=list_courses">View/Edit Courses</a></p>

<?php
include('view/footer.php');
?>
