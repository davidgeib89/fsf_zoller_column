<?php
namespace FREESIXTYFIVE\FsfZollerColumn\Controller;


/***
 *
 * This file is part of the "Zoller Column" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 David Geib <d.geib@freesixtyfive.de>, FREESIXTYFIVE
 *
 ***/
/**
 * ColumnController
 */
class ColumnController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * columnRepository
     * 
     * @var \FREESIXTYFIVE\FsfZollerColumn\Domain\Repository\ColumnRepository
     */
    protected $columnRepository = null;

    /**
     * @param \FREESIXTYFIVE\FsfZollerColumn\Domain\Repository\ColumnRepository $columnRepository
     */
    public function injectColumnRepository(\FREESIXTYFIVE\FsfZollerColumn\Domain\Repository\ColumnRepository $columnRepository)
    {
        $this->columnRepository = $columnRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $columns = $this->columnRepository->findAll();
        $this->view->assign('columns', $columns);
    }
}
