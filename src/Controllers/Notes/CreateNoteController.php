<?php declare(strict_types=1);

namespace Reconmap\Controllers\Notes;

use Psr\Http\Message\ServerRequestInterface;
use Reconmap\Controllers\Controller;
use Reconmap\Repositories\NoteRepository;

class CreateNoteController extends Controller
{
    public function __invoke(ServerRequestInterface $request, array $args): array
    {
        $note = $this->getJsonBodyDecoded($request);

        $userId = $request->getAttribute('userId');

        $repository = new NoteRepository($this->db);
        $result = $repository->insert($userId, $note);

        return ['success' => $result];
    }
}
