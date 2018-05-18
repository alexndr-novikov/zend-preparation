<?php use \Doc\helpers\HTML;

HTML::h1('SplQueue()');

$queue = new \SplQueue();
$queue->setIteratorMode(\SplQueue::IT_MODE_DELETE);
$queue[] = 1;
$queue[] = 2;
$queue[] = 3;

foreach ($queue as $item) {
    HTML::p($item);
}
HTML::dump($queue->count());

$queue = new \SplQueue();
$queue->setIteratorMode(\SplQueue::IT_MODE_KEEP);
$queue[] = 1;
$queue[] = 2;
$queue[] = 3;

foreach ($queue as $item) {
    HTML::p($item);
}
HTML::dump($queue->count());
HTML::dump($queue->dequeue());
HTML::dump($queue->count());
$queue->setIteratorMode(\SplQueue::IT_MODE_DELETE);
foreach ($queue as $item) {
    HTML::p($item);
}
HTML::dump($queue->count());
try {
    $queue->dequeue();
} catch (\Exception $e) {
    HTML::p($e->getMessage());
}
$queue->enqueue(1);
HTML::dump($queue->count());

try {
    $queue = new \SplQueue();
    $queue->setIteratorMode(\SplQueue::IT_MODE_LIFO);
} catch (\Exception $e) {
    HTML::p($e->getMessage());
}
