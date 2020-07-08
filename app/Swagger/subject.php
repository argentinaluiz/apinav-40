<?php
/**
 * @SWG\Get(
 *     tags={"Subject"},
 *     path="/api/subjects",
 *     summary="Lista todas as disciplinas",
 *     produces={"application/json"},
 *     @SWG\Response(
 *     response="default",
 *     description="successful operation"
 *     )
 * )
 *
 * @SWG\Post(
 *     tags={"Subject"},
 *     path="/api/subjects",
 *     summary="Cadastra uma disciplina",
 *     produces={"application/json"},
 *     @SWG\Response(
 *     response="default",
 *     description="successful operation"
 *     ),
 *   @SWG\Parameter(in="body",name="body",
 *       @SWG\Schema(type="string",
 *          @SWG\Property(property="name", type="string", example="Administração"),
 *          @SWG\Property(property="code", type="string", example="ADM2022"),
 *     )),
 *
 * )
 *
 * * @SWG\Put(
 *   path="/api/subjects/{subject}",
 *   summary="Editar uma disciplina",
 *   tags={"Subject"},
 *   @SWG\Parameter(in="path", name="subject", description="id da disciplina", type="integer", required=true ),
 *   @SWG\Parameter(in="body",name="body",
 *       @SWG\Schema(type="string",
 *          @SWG\Property(property="name", type="string", example="Administração"),
 *          @SWG\Property(property="code", type="string", example="ADM2022"),
 *     )),
 *   @SWG\Response(response=201, description="successful operation. User created and rescued"),
 * )
 *
 * @SWG\Delete(
 *   path="/api/subject/{subject}",
 *   summary="Deletar uma disciplina",
 *   tags={"Subject"},
 *   @SWG\Parameter(in="path", name="subject", description="id da disciplina", type="integer", required=true ),
 *   @SWG\Response(response=200, description="successful operation")
 * )
 */

