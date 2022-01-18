<?php
/**
 * Autogenerated by Thrift Compiler (0.14.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class TDownloadDataReq
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'sessionHandle',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\TSessionHandle',
        ),
        2 => array(
            'var' => 'tableName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'query',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'format',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'downloadOptions',
            'isRequired' => false,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::STRING,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::STRING,
                ),
        ),
    );

    /**
     * @var \TSessionHandle
     */
    public $sessionHandle = null;
    /**
     * @var string
     */
    public $tableName = null;
    /**
     * @var string
     */
    public $query = null;
    /**
     * @var string
     */
    public $format = null;
    /**
     * @var array
     */
    public $downloadOptions = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['sessionHandle'])) {
                $this->sessionHandle = $vals['sessionHandle'];
            }
            if (isset($vals['tableName'])) {
                $this->tableName = $vals['tableName'];
            }
            if (isset($vals['query'])) {
                $this->query = $vals['query'];
            }
            if (isset($vals['format'])) {
                $this->format = $vals['format'];
            }
            if (isset($vals['downloadOptions'])) {
                $this->downloadOptions = $vals['downloadOptions'];
            }
        }
    }

    public function getName()
    {
        return 'TDownloadDataReq';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->sessionHandle = new \TSessionHandle();
                        $xfer += $this->sessionHandle->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->tableName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->query);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->format);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::MAP) {
                        $this->downloadOptions = array();
                        $_size161 = 0;
                        $_ktype162 = 0;
                        $_vtype163 = 0;
                        $xfer += $input->readMapBegin($_ktype162, $_vtype163, $_size161);
                        for ($_i165 = 0; $_i165 < $_size161; ++$_i165) {
                            $key166 = '';
                            $val167 = '';
                            $xfer += $input->readString($key166);
                            $xfer += $input->readString($val167);
                            $this->downloadOptions[$key166] = $val167;
                        }
                        $xfer += $input->readMapEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('TDownloadDataReq');
        if ($this->sessionHandle !== null) {
            if (!is_object($this->sessionHandle)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('sessionHandle', TType::STRUCT, 1);
            $xfer += $this->sessionHandle->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tableName !== null) {
            $xfer += $output->writeFieldBegin('tableName', TType::STRING, 2);
            $xfer += $output->writeString($this->tableName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->query !== null) {
            $xfer += $output->writeFieldBegin('query', TType::STRING, 3);
            $xfer += $output->writeString($this->query);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->format !== null) {
            $xfer += $output->writeFieldBegin('format', TType::STRING, 4);
            $xfer += $output->writeString($this->format);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->downloadOptions !== null) {
            if (!is_array($this->downloadOptions)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('downloadOptions', TType::MAP, 5);
            $output->writeMapBegin(TType::STRING, TType::STRING, count($this->downloadOptions));
            foreach ($this->downloadOptions as $kiter168 => $viter169) {
                $xfer += $output->writeString($kiter168);
                $xfer += $output->writeString($viter169);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}