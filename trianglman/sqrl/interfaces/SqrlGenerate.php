<?php

/*
 * The MIT License (MIT)
 * 
 * Copyright (c) 2013 John Judy
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace trianglman\sqrl\interfaces;

/**
 * Generates a SQRL QR image, URL and nonce.
 * 
 * @author johnj
 */
interface SqrlGenerate {
    
    /**
     * Loads a configuration file from the supplied path
     * 
     * @param string $filePath Path to a JSON formatted configuration file
     * 
     * @return void
     * 
     * @throws \InvalidArgumentException If the file does not exist
     * @throws \InvalidArgumentException If the file is not JSON formatted
     */
    public function loadConfigFromJSON($filePath);
    
    /**
     * Sets the path to the file that will process SQRL validations
     * 
     * According to the current proposal, this path should use the sqrl:// protocol.
     * 
     * @param string $sqrlPath
     * 
     * @return void
     */
    public function setPath($sqrlPath);
    
    /**
     * Sets the height of the QR image that will be generatated
     * 
     * @param int $height The height in pixels
     * 
     * @return void
     */
    public function setHeight($height);
    
    /**
     * Sets the internal padding between the edge of the image and the QR code
     * 
     * @param int $pad The size of the padding in pixels
     * 
     * @return void
     */
    public function setPadding($pad);
    
    /**
     * Sets the salt to be used as part of generating the nonce
     * 
     * @param string $salt
     * 
     * @return void
     */
    public function setSalt($salt);
    
    /**
     * Generates the QR code image
     * 
     * If no output file is supplied, the image is output into stdout
     * 
     * @param string $outputFile
     * 
     * @return void
     */
    public function render($outputFile = null);

    /**
     * Returns the generated nonce
     * 
     * @return string The one time use number for the QR link
     */
    public function getNonce();
}
