<?php

    namespace App\News;


    use EazyJsonRpc\BaseJsonRpcException;
    use GuzzleHttp\Exception\GuzzleException;
    use MyShowsRpc\RpcClient;

    class NewsManager {

        /**
         * RpcClient
         */
        private $rpcClient;


        public function __construct( RpcClient $rpcClient ) {
            $this->rpcClient = $rpcClient;
        }


        /**
         * @param int $id
         * @return string
         * @throws GuzzleException
         * @throws \JsonMapper_Exception
         */
        public function GetNewsTitleById( int $id ): string {
            try {
                $news   = $this->rpcClient->news_GetById( $id );
                $result = $news->title;
            } catch ( BaseJsonRpcException $e ) {
                $result = $e->getMessage();
            }

            return $result;
        }


        /**
         * @return array
         * @throws BaseJsonRpcException
         * @throws GuzzleException
         * @throws \JsonMapper_Exception
         */
        public function GetLastThreeNews(): array {
            return $this->rpcClient->news_Get(null, null, 3);
        }

    }