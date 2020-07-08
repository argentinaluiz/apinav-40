<?php
/**
 * @SWG\Post(
 *   path="banner/{product_id}",
 *   summary="Created banner promotional",
 *   operationId="pdv-banner-create",
 *   tags={"Banner Promotional"},
 *   @SWG\Parameter(in="header",name="X-DreamFactory-API-Key",description="Authorization Proxy",type="string",required=true,default=L5_SWAGGER_TOKEN_DF_OUT),
 *   @SWG\Parameter(in="header",name="x-pdv-token",description="PDV Session Token",type="string",required=true,default=""),
 *   @SWG\Parameter(in="path", name="product_id", description="product id", type="string", required=true ),
 *   @SWG\Parameter(in="body",name="body",description="
 *      Não envie a tag 'description' é opcional ou envie com valor null",
 *      required=true,default="",
 *       @SWG\Schema(type="string",
 *          @SWG\Property(property="name", type="string", example="Nome da promoção"),
 *          @SWG\Property(property="description", type="string", example="50% de desconto"),
 *          @SWG\Property(property="image", type="string", example="http://dns.com.br/media/image.png")
 *     )),
 *   @SWG\Response(response=201, description="successful operation. User created and rescued"),
 * )
 *
 * @SWG\Put(
 *   path="banner/{product_id}",
 *   summary="Edit banner promotional",
 *   operationId="pdv-banner-edit",
 *   tags={"Banner Promotional"},
 *   @SWG\Parameter(in="header",name="X-DreamFactory-API-Key",description="Authorization Proxy",type="string",required=true,default=L5_SWAGGER_TOKEN_DF_OUT),
 *   @SWG\Parameter(in="header",name="x-pdv-token",description="PDV Session Token",type="string",required=true,default=""),
 *   @SWG\Parameter(in="path", name="product_id", description="product id", type="string", required=true ),
 *   @SWG\Parameter(in="body",name="body",description="
 *      Não envie a tag 'description' é opcional ou envie com valor null",
 *      required=true,default="",
 *       @SWG\Schema(type="string",
 *          @SWG\Property(property="name", type="string", example="Nome da promoção"),
 *          @SWG\Property(property="description", type="string", example="50% de desconto")
 *     )),
 *   @SWG\Response(response=201, description="successful operation. User created and rescued"),
 * )
 *
 * @SWG\Delete(
 *   path="banner/{product_id}",
 *   summary="Delete banner",
 *   operationId="Pdv-banner-del",
 *   tags={"Banner Promotional"},
 *   @SWG\Parameter(in="header",name="X-DreamFactory-API-Key",description="Authorization Proxy",type="string",required=true,default=L5_SWAGGER_TOKEN_DF_OUT),
 *   @SWG\Parameter(in="header",name="x-pdv-token",description="PDV Session Token",type="string",required=true,default=""),
 *   @SWG\Parameter(in="path", name="product_id", description="banner id", type="string", required=true ),
 *   @SWG\Response(response=200, description="successful operation")
 * )
 */