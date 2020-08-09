<?php

namespace FTPApp\Modules;

interface FtpAdapter
{
    /**
     * Opens the FTP connection using the provided configs.
     *
     * @param array $config
     *
     * @return void
     *
     * @throws FtpAdapterException
     */
    public function openConnection($config);

    /**
     * Sets the passive mode on/off.
     *
     * @param bool $bool
     *
     * @return mixed
     */
    public function setPassive($bool);

    /**
     * Gets a list of files in the giving directory.
     *
     * @param string $dir
     *
     * @return mixed
     *
     * @throws FtpAdapterException
     */
    public function browse($dir);

    /**
     * @param string $file
     *
     * @return bool
     *
     * @throws FtpAdapterException
     */
    public function addFile($file);

    /**
     * @param string $folder
     *
     * @return bool
     *
     * @throws FtpAdapterException
     */
    public function addFolder($folder);

    /**
     * @param string $file
     *
     * @return string
     *
     * @throws FtpAdapterException
     */
    public function getFileContent($file);

    /**
     * @param string $file
     *
     * @param string $content
     *
     * @return string
     *
     * @throws FtpAdapterException
     */
    public function updateFileContent($file, $content);
}