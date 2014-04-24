<?php exit; ?>
1396529359
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (A_forum_moderator_cache m) LEFT JOIN A_forum_users u ON (m.user_id = u.user_id) LEFT JOIN A_forum_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}