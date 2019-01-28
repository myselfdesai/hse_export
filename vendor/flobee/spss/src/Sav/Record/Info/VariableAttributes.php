<?php

namespace SPSS\Sav\Record\Info;

use SPSS\Buffer;
use SPSS\Exception;
use SPSS\Sav\Record\Info;


class VariableAttributes
    extends Info
{
    const SUBTYPE = 18;

    /**
     * @var array
     */
    public $data = [];


    /**
     * @param Buffer $buffer
     */
    public function read( Buffer $buffer )
    {
        parent::read( $buffer );
        $data = $buffer->readString( $this->dataSize * $this->dataCount );
        foreach ( explode( '/', $data ) as $item ) {
            list($var, $value) = explode( ':', $item );

            if ( preg_match_all( '#(.+)\((.+)\)#Uis', $value, $matches ) ) {
                $this->data[$var] = array();

                foreach ( $matches[1] as $key => $val ) {
                    $this->data[$var][$val] =
                        trim( trim( $matches[2][$key] ), '\'' );
                }
            } else {
                $this->data[$var] = $value;
            }
        }
    }


    /**
     * @param Buffer $buffer
     */
    public function write( Buffer $buffer )
    {
        parent::write( $buffer ); // TODO: Change the autogenerated stub
    }

}